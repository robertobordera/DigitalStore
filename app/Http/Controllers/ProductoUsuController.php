<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comentariousu;
use App\Models\Compra;
use App\Models\Productousu;
use App\Models\Usuario;
use App\Models\Venta;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductoUsuController extends Controller
{
    public function ObtenerProductosSubidos(string $id):JsonResponse
    {
        $productos = Productousu::where('usuario_id',$id)->get();
        return response()->json([
            'success'=>true,
            'data'=>$productos
        ],200);
    }

    public function ObtenerProductosTodos():JsonResponse
    {
        $productos_usuarios = Productousu::where('activo',true)->with('usuario')->get();
        return response()->json([
            'success' => true,
            'data' => $productos_usuarios
        ],200);
    }

    public function ObtenerProducto(string $id):JsonResponse
    {
        $productoUsuario = Productousu::where('id', $id)->with('usuario')->first();
        $productoUsuario->usuario->loadCount('ventas');
        // $productoUsuario->totalVentas = $ventas->ventas_count;

        return response()->json([
            'success' => true,
            "data" => $productoUsuario
        ],201);
    }

    public function ObtenerComentariosProducto(int $id):JsonResponse{

        $comentarios = Comentariousu::select('usuarios.nombre', 'usuarios.avatar', 'comentariousus.comentario', 'comentariousus.fecha')
        ->join('productousus', 'comentariousus.productousu_id', '=', 'productousus.id')
        ->join('usuarios', 'usuarios.id', '=', 'comentariousus.usuario_id')
        ->where('productousus.id', $id)
        ->get();

        if($comentarios->isEmpty()) {
            return response()->json([
                'success' => true,
                'message' => 'No existen comentarios',
                'data' => []
            ], 200);
        } else {
            return response()->json([
                'success' => true,
                'message' => 'Mostrando comentarios',
                'data' => $comentarios
            ], 200);
        }
    }
    public function ventas(int $idProducto, int $idUsuario): JsonResponse
    {
        $miUsuario = Usuario::where('me',true)->get()->first();
         
        // Buscar el producto en base al ID proporcionado
        $producto_usu = Productousu::find($idProducto);
    
        // Verificar si se encontró el producto
        if (!$producto_usu) {
            return response()->json([
                'success' => false,
                'message' => 'Producto no encontrado'
            ], 404);
        }
        //Crear la compra
        $compra = Compra::create([
            'total'=>$producto_usu->precio,
            'productousu_id'=>$idProducto,
            'usuario_id'=>$miUsuario->id
        ]);
    
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
            'data' => [$venta,$compra]
        ], 200);
    }

    public function SubirProducto(Request $request):JsonResponse
    {
        $miUsuario = Usuario::where('me',true);
        $producto = Productousu::create([
            'titulo' =>$request->titulo,
            'precio' =>$request->precio,
            'descripcion'=>$request->descripcion,
            'activo'=>$request->activo,
            'fechaSubida'=>date('Y-m-d'),
            'categoria_id'=>3,
            'usuario_id'=>$miUsuario->id
        ]);

        return response()->json([
            'success' => true,
            'data'=>$producto
        ],201);
    }
    
}
