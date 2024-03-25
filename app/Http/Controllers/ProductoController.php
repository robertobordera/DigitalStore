<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use function Pest\Laravel\json;

class ProductoController extends Controller
{
   
    public function index():JsonResponse
    {
        $producto = Producto::all();
        $producto = Producto::where('activo',true)->get();


        return response()->json([
            'success'=>true,
            'data'=>$producto
        ],200);
    }

   
    public function store(Request $request):JsonResponse
    {
        $producto = Producto::create($request->all());
        return response()->json([
            'success' => true,
            'data' => $producto
        ],201);
    }

    public function show(string $id):JsonResponse
    {
        $producto = Producto::find($id);
        
        return response()->json([
            'success' => true,
            'data'=>$producto
        ],200);
    }
    
    public function valoraciones(string $id):JsonResponse
    {
        $producto = Producto::find($id);
        $valoraciones = $producto->valoraciones;

        $comentarios = [];
        foreach($valoraciones as $valoracion)
        {
            $comentarios[] = $valoracion;
        }
        return response()->json([
            'success' => true,
            'data'=>$comentarios
        ],200);
    }

     

    public function update(Request $request, string $id):JsonResponse
    {
        $producto = Producto::find($id);
        $producto->update($request->all());

        return response()->json([
            'success' => true,
            'data' => $producto
        ],200);
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
