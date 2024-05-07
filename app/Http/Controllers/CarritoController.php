<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Carrito;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class CarritoController extends Controller
{
    public function añadirProducto(Request $request):JsonResponse
    {
        Carrito::create([
            "producto_id" => $request->producto_id,
            "usuario_id" => $request->usuario_id
        ]);

        return response()->json([
            "success" => true,
            "message" => "Añadido al carrito con exito"
        ],201);
    }

    public function mostrarProductosCarrito(string $id):JsonResponse{
        // $productos = Carrito::where('usuario_id',$id)->get();

        $usuario = Usuario::find($id);
        $productos = $usuario->productos()->get();

        return response()->json([
            'success' => true,
            'carritoProducts' => $productos
        ],201);
    }
}
