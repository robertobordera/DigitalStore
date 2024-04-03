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

class UsuarioController extends Controller
{
    public function obtenerReseñasRealizas(string $id): JsonResponse
    {
        $usuario = Usuario::select('productos.marcaModelo', 'productos.descripcion', 'valoraciones.comentario', 'valoraciones.puntuacion', 'valoraciones.fecha')
            ->join('valoraciones', 'usuarios.id', '=', 'valoraciones.usuario_id')
            ->join('productos', 'productos.id', '=', 'valoraciones.producto_id')
            ->where('usuarios.id', $id)
            ->get();

        return response()->json([
            "success" => true,
            "data" => $usuario
        ], 200);
    }

    public function CambiarDatos(Request $request): JsonResponse
    {
        $miUsuario = Usuario::where('me', true)->first();

        // Verificar si el email o el nombre ya existen en la base de datos
        $usuarioExistente = Usuario::where('correo', $request->correo)
            ->orWhere('nombre', $request->nombre)
            ->first();

        if ($usuarioExistente) {
            // Actualizar los datos del usuario
            return response()->json([
                'success' => false,
                'message' => "El email o el nombre de usuario ya existen"
            ], 200);
        } else 
        {
            $miUsuario->update([
                'correo' => $request->correo,
                'nombre' => $request->nombre
            ]);
    
            return response()->json([
                'success' => true,
                'message' => "Datos actualizados con éxito",
                'data' => $miUsuario
            ], 200);
        }
        
    }



    public function ObtenerMisProductos(): JsonResponse
    {
        $miUsuario = Usuario::where('me', true)->get()->first();
        $productos = Productousu::all()->where('usuario_id', $miUsuario->id);

        return response()->json([
            'success' => true,
            'message' => 'Obteniendo mis productos',
            'data' => $productos
        ], 200);
    }

    public function CambiarContraseña(Request $request): JsonResponse
    {
        $miUsuario = Usuario::where('me', true)->get()->first();
        $miUsuario = Usuario::find($miUsuario->id);

        if ($request->contraseña1 != $request->contraseña2) {
            if (strlen($request->contraseña1) > 5) {
                $miUsuario::update([
                    'contraseña' => $request->contraseña1
                ]);

                return response()->json([
                    'success' => true,
                    'message' => "contraseña cambiado con exito",
                    'data' => $miUsuario,
                ], 200);
            } else {
                return response()->json([
                    'succeess' => false,
                    'message' => "La contraseña debe tener una longitud mayor a 5 caracteres",
                ], 200);
            }
        } else {
            return response()->json([
                'succeess' => false,
                'message' => "Las contraseñas no puedes coincidir",
            ], 401);
        }
    }

    public function MisComentarios()
    {
        //Hacer una query para obtener imagen del producto y descripcion
        $miUsuario = Usuario::where('me', true)->get()->first();
        $comentarios = Comentariousu::where('usuario_id', $miUsuario->id)->get();

        if ($comentarios->isEmpty()) {
            return response()->json([
                'success' => true,
                'message' => 'Todavia no se ha realizado ningun comentario'
            ], 200);
        } else if ($comentarios) {
            return response()->json([
                'success' => true,
                'message' => 'Obteniendo mis comentarios',
                'data' => $comentarios
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Error al obtener los comentarios',
                'data' => $comentarios
            ], 401);
        }
    }
}
