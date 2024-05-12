<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Solicitud;
use Illuminate\Support\Facades\DB;

class SolicitudController extends Controller
{
    public function enviarSolicitud(Request $request): JsonResponse
    {
        $solicitud = Solicitud::create([
            'usuario_enviador_id' => $request->usuario_enviador_id,
            'usuario_receptor_id' => $request->usuario_receptor_id,
            'productousu_id' => $request->productousu_id
        ]);

        return response()->json([
            'success' => true,
            'solicitud' => $solicitud
        ], 201);
    }

    public function leerSolicitud(string $usuario_receptor_id): JsonResponse
    {

        $solicitudes = DB::table('solicituds as S')
        ->join('usuarios as enviador', 'S.usuario_enviador_id', '=', 'enviador.id')
        ->join('usuarios as receptor', 'receptor.id', '=', 'S.usuario_receptor_id')
        ->join('productousus as P', 'S.productousu_id', '=', 'P.id')
        ->select('S.id', 'enviador.nombre as nombre', 'enviador.telefono', 'enviador.correo', 'P.titulo', 'S.fecha')
        ->where('S.usuario_receptor_id', '=', $usuario_receptor_id)
        ->get();
    

        return response()->json([
            'success' => true,
            'solicitud' => $solicitudes
        ],201);
    }
}
