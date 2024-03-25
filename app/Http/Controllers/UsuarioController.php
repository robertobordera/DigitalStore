<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Productousu;
use App\Models\Usuario;
use App\Models\Venta;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function obtenerReseñasRealizas(string $id):JsonResponse
    {
        $usuario = Usuario::select('productos.marcaModelo','productos.descripcion','valoraciones.comentario','valoraciones.puntuacion','valoraciones.fecha')
        ->join('valoraciones', 'usuarios.id', '=', 'valoraciones.usuario_id')
        ->join('productos', 'productos.id', '=', 'valoraciones.producto_id')
        ->where('usuarios.id', $id)
        ->get();
    
    return response()->json([
        "success" => true,
        "data" => $usuario
    ], 200);
    }

    public function ObtenerProductosSubidos(string $id):JsonResponse
    {
        $productos = Productousu::where('usuario_id',$id)->get();
        return response()->json([
            'success'=>true,
            'data'=>$productos
        ],200);
    }

    public function ObtenerMisProductos()
    {

    }

    public function ObtenerProductosTodos():JsonResponse
    {
        $productos_usuarios = Productousu::where('activo',true)->get();
        return response()->json([
            'success' => true,
            'data' => $productos_usuarios
        ],200);
    }

    public function ventas(int $idProducto, int $idUsuario): JsonResponse
    {
        // Convertir los IDs a enteros si es necesario
        // $idProducto = (int)$idProducto;
        // $idUsuario = (int)$idUsuario;
    
        // Buscar el producto en base al ID proporcionado
        $producto_usu = Productousu::find($idProducto);
    
        // Verificar si se encontró el producto
        if (!$producto_usu) {
            return response()->json([
                'success' => false,
                'message' => 'Producto no encontrado'
            ], 404);
        }
    
        // Crear la venta
        $venta = Venta::create([
            'total' =>  $producto_usu->precio,
            'productousu_id' => $idProducto,
            'usuario_id' => $idUsuario // Usar el ID del usuario proporcionado
        ]);
    
        // Desactivar el producto
        $producto_usu->activo = false;
        $producto_usu->save();
    
        // Devolver la respuesta
        return response()->json([
            'success' => true,
            'data' => $venta
        ], 200);
    }
}
