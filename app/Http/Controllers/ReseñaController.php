<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Productousu;
use App\Models\Reseña;
use App\Models\Usuario;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReseñaController extends Controller
{
    public function crearReseña(Request $request):JsonResponse{
        $reseñaCreada = Reseña::create([
            'reseña' => $request->reseña,
            'puntuacion' => $request->puntuacion,
            'usuario_enviador_id' => $request->usuario_enviador_id,
            'usuario_receptor_id' => $request->usuario_receptor_id,
            'productousu_id' => $request->productousu_id
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Reseña realizada',
        ],201);
    }

    public function obtenerReseñasRealizadas($id):JsonResponse{
        if($id == "me"){
            $miUsuario = Usuario::where('me',true)->get()->first();
            $result = DB::table('reseñas as R')
            ->join('usuarios as enviador', 'R.usuario_enviador_id', '=', 'enviador.id')
            ->join('usuarios as receptor', 'R.usuario_receptor_id', '=', 'receptor.id')
            ->join('productousus as P', 'P.id', '=', 'R.productousu_id')
            ->where('enviador.id', $miUsuario->id)
            ->select('R.id', 'P.titulo', 'enviador.avatar', 'R.reseña as resenya', 'R.puntuacion', 'R.created_at','P.imagen')
            ->get();
        }
        else{
            $result = DB::table('reseñas as R')
            ->join('usuarios as enviador', 'R.usuario_enviador_id', '=', 'enviador.id')
            ->join('usuarios as receptor', 'R.usuario_receptor_id', '=', 'receptor.id')
            ->join('productousus as P', 'P.id', '=', 'R.productousu_id')
            ->where('enviador.id', $id)
            ->select('R.id', 'P.titulo', 'enviador.avatar', 'R.reseña as resenya', 'R.puntuacion', 'R.created_at','P.imagen')
            ->get();
        }

        return response()->json([
            'success'=>true,
            'data'=>$result
        ],200);
    }

    public function obtenerReseñasRecibidas($id):JsonResponse{
        if($id == "me"){
            $miUsuario = Usuario::where('me',true)->get()->first();
            $result = DB::table('reseñas as R')
            ->join('usuarios as enviador', 'R.usuario_enviador_id', '=', 'enviador.id')
            ->join('usuarios as receptor', 'R.usuario_receptor_id', '=', 'receptor.id')
            ->join('productousus as P', 'P.id', '=', 'R.productousu_id')
            ->where('receptor.id', $miUsuario->id)
            ->select('R.id', 'P.titulo', 'enviador.avatar', 'R.reseña as resenya', 'R.puntuacion', 'R.created_at','P.imagen')
            ->get();
        }
        else{
            $result = DB::table('reseñas as R')
            ->join('usuarios as enviador', 'R.usuario_enviador_id', '=', 'enviador.id')
            ->join('usuarios as receptor', 'R.usuario_receptor_id', '=', 'receptor.id')
            ->join('productousus as P', 'P.id', '=', 'R.productousu_id')
            ->where('receptor.id', $id)
            ->select('R.id', 'P.titulo', 'enviador.avatar', 'R.reseña as resenya', 'R.puntuacion', 'R.created_at','P.imagen')
            ->get();
        }

        return response()->json([
            'success'=>true,
            'data'=>$result
        ],200);
    }
}
