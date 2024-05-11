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
        $cont = 0;

        foreach($productos as $producto){
            $cont++;
        }

        foreach ($productos as $producto) {
            $producto->total = $cont;
        }

        return response()->json([
            'success' => true,
            'carritoProducts' => $productos
        ],201);
    }

    public function borrarProductoCarrito(string $idUsuario, string $idProducto):JsonResponse{

        $usuario = Usuario::find($idUsuario);
        $usuario->productos()->wherePivot('producto_id', $idProducto)->detach();

        return response()->json([
            'success' => true,
            'message' => "Producto eliminado del carrito"
        ],201);
    }

    public function vaciarCarrito(string $idUsuario):JsonResponse{
        Carrito::where('usuario_id',$idUsuario)->delete();

        return response()->json([
            "success" => true,
            "message" => "Carrito vaciado"
        ],201);
    }
}
