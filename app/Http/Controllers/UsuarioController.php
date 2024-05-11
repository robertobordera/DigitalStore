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
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


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

    public function EditarComentario(Request $request, int $id): JsonResponse
    {
        //Por hacer
        $comentarioEditar = Comentariousu::find($id);

        $comentarioEditar::update([
            'comentario' => $request->comentario,
            'editado' => true
        ]);

        return response()->json([
            'success' => true,
            'message' => 'comentario editado con exito',
            'data' => $comentarioEditar
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
        } else {
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

    public function ObtenerMisProductosVendidos():JsonResponse
    {
        $miUsuario = Usuario::where('me', true)->get()->first();

        $resultados = DB::table('usuarios as U')
            ->join('ventas as V', 'V.usuario_id', '=', 'U.id')
            ->join('productousus as P', 'P.id', '=', 'V.productousu_id')
            ->select('P.titulo', 'P.precio', 'V.fecha')
            ->where('V.usuario_id', $miUsuario->id)
            ->get();
        
        return response()->json([
            'success' => true,
            'message' => 'Obteniendo mis productos',
            'data' => $resultados
        ], 200);
    }

    public function CambiarContraseña(Request $request): JsonResponse
    {
        $miUsuario = Usuario::where('me', true)->get()->first();
        $miUsuario = Usuario::find($miUsuario->id);

        if ($request->password1 != $request->password2) {
            if (strlen($request->password1) > 5) {
                $miUsuario::update([
                    'password' => $request->password1
                ]);

                return response()->json([
                    'success' => true,
                    'message' => "password cambiado con exito",
                    'data' => $miUsuario,
                ], 200);
            } else {
                return response()->json([
                    'succeess' => false,
                    'message' => "La password debe tener una longitud mayor a 5 caracteres",
                ], 200);
            }
        } else {
            return response()->json([
                'succeess' => false,
                'message' => "Las passwords no puedes coincidir",
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

    public function misDatos(): JsonResponse
    {
        $miUsuario = Usuario::where('me', true)->first();

        return response()->json([
            'success' => true,
            'usuario' => $miUsuario
        ], 201);
    }

    public function actualizarCorreo(Request $request): JsonResponse
    {
        $miUsuario = Usuario::where('me', true)->first();
        $miUsuario->update([
            'correo' => $request->correo
        ]);

        return response()->json([
            'success' => true,
            'message' => "Correo actualizado con exito"
        ], 201);
    }

    public function actualizarPassword(Request $request): JsonResponse
    {
        $miUsuario = Usuario::where('me', true)->first();
        $miUsuario->update([
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'success' => true,
            'message' => "Contraseña actualizada con exito"
        ], 201);
    }

    public function actualizarDireccion(Request $request): JsonResponse
    {
        $miUsuario = Usuario::where('me', true)->first();

        if ($request->filled('calle')) {
            $miUsuario->update([
                'calle' => $request->calle,
            ]);
        }
        
        if ($request->filled('numeroCalle')) {
            $miUsuario->update([
                'numeroCalle' => $request->numeroCalle,
            ]);
        }
        
        if ($request->filled('codigoPostal')) {
            $miUsuario->update([
                'codigoPostal' => $request->codigoPostal,
            ]);
        }
        
        if ($request->filled('provincia')) {
            $miUsuario->update([
                'provincia' => $request->provincia,
            ]);
        }
        

        return response()->json([
            'success' => true,
            'message' => "Direccion actualizada con exito"
        ], 201);
    }

    public function actualizarNombre(Request $request): JsonResponse
    {
        $miUsuario = Usuario::where('me', true)->first();
        $miUsuario->update([
            'nombre' => $request->nombre
        ]);

        return response()->json([
            'success' => true,
            'message' => "Nombre actualizado con exito"
        ], 201);
    }
}
