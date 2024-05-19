<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Valoracion;
// use function Pest\Laravel\json;

class ProductoController extends Controller
{

    public function index(): JsonResponse
    {
        $producto = Producto::all();
        $producto = Producto::where('activo', true)->get();

        return response()->json([
            'success' => true,
            'datas' => $producto
        ], 200);
    }


    public function store(Request $request): JsonResponse
    {
        $producto = Producto::create($request->all());

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');

            $imagenBase64 = base64_encode(file_get_contents($imagen->path()));

            $producto->imagen = $imagenBase64;

            $producto->save();
        }

        return response()->json([
            'success' => true,
            'data' => $producto
        ], 201);
    }

    public function show(string $id): JsonResponse
    {
        $producto = Producto::find($id);

        return response()->json([
            'success' => true,
            'data' => $producto
        ], 200);
    }

    public function create(): View
    {
        return view('producto.create');
    }

    public function valoraciones(string $id): JsonResponse
    {
        // $producto = Producto::find($id);
        // $valoraciones = $producto->valoraciones;

        // $comentarios = [];
        // foreach($valoraciones as $valoracion)
        // {
        //     $comentarios[] = $valoracion;
        // }
        $valoraciones = Valoracion::join('usuarios', 'valoraciones.usuario_id', '=', 'usuarios.id')
            ->select('valoraciones.id', 'usuarios.nombre', 'valoraciones.comentario', 'valoraciones.puntuacion', 'valoraciones.fecha')
            ->where('valoraciones.producto_id', $id)
            ->get();

        return response()->json([
            'success' => true,
            'valoraciones' => $valoraciones
        ], 200);
    }

                                
    public function productosCategoria(string $id): JsonResponse
    {
        $productosCategoria = Producto::where('categoria_id', $id)
            ->where('activo', true)
            ->get();

        return response()->json([
            'success' => true,
            'datas' => $productosCategoria
        ], 200);
    }


    public function limitProductos(string $numero,string $categoria):JsonResponse{
        $query = Producto::where('activo', true)
        ->orderBy('created_at', 'desc')
        ->limit($numero);

        if (!is_null($categoria)) {
        $query->where('categoria_id', '!=', $categoria);
        }

        $productos = $query->get();

        return response()->json([
            'success' => true,
            'datas' => $productos
        ], 200);
    }

    public function update(Request $request, string $id): JsonResponse
    {
        $producto = Producto::find($id);
        $producto->update($request->all());

        return response()->json([
            'success' => true,
            'data' => $producto
        ], 200);
    }


    public function destroy(string $id)
    {
        $producto = Producto::find($id);
        $producto->delete();

        return response()->json([
            'success' => true,
            'data' => $producto
        ]);
    }
}
