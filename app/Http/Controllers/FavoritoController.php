<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Favorito;
use App\Models\Productousu;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Models\Usuario;
use Mockery\Undefined;

class FavoritoController extends Controller
{
    public function añadirFavorito(Request $request):JsonResponse
    {
        Favorito::create([
            "productousu_id" => $request->productousu_id,
            "usuario_id" => $request->usuario_id
        ]);

        return response()->json([
            "success" => true,
            "message" => "Añadido a favoritos con exito"
        ],201);
    }

    public function mostrarProductosFavoritos(string $id):JsonResponse{
        // $productos = Carrito::where('usuario_id',$id)->get();

        if($id == "me"){
            $miUsuario = Usuario::where('me', true)->get()->first();
            $productos = $miUsuario->productosusus()->with('usuario')->get();
        }
        else
        {
            $miUsuario = Usuario::where('id', $id)->get()->first();
            $productos = $miUsuario->productosusus()->with('usuario')->get();
        }
      
        return response()->json([
            'success' => true,
            'data' => $productos
        ],201);
    }

    public function borrarProductoFavoritos(string $idUsuario, string $idProductousu):JsonResponse{

        $usuario = Usuario::find($idUsuario);
        $usuario->productosusus()->wherePivot('productousu_id', $idProductousu)->detach();

        return response()->json([
            'success' => true,
            'message' => "Producto eliminado"
        ],201);
    }

    public function comprobarSiExiste(string $idUsuario, string $idProductousu):JsonResponse
    {
        $usuario = Usuario::find($idUsuario);
        $usuarioFav = Favorito::where('usuario_id',$usuario->id)->get();

        if(!$usuarioFav){
            return response()->json([
                'success' => false
            ],401);
        }

        $existe = $usuario->productosusus()->wherePivot('productousu_id',$idProductousu)->first();
        if(!$existe){
            return response()->json([
                'success' => false
            ],401);
        }

        return response()->json([
            'success' => true
        ],201);
    }   
}
