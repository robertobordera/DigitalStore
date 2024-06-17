<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateLoginRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Usuario;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;



class AuthController extends Controller
{
    public function crearUsuario(Request $request):JsonResponse{
        
        $user = Usuario::create([
            'nombre' => $request->nombre,
            'password' => Hash::make($request->password),
            'correo' => $request->correo,
            'calle' => $request->calle,
            'numeroCalle' => $request->numeroCalle,
            'codigoPostal' => $request->codigoPostal,
            'provincia' => $request->provincia,
            'latitud' => $request->latitud,
            'longitud' => $request->longitud
        ]);

        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('public/usuarios');
            // Remover el prefijo "/storage" de la URL
            $url = str_replace('/storage', 'storage', Storage::url($path));
            $user->avatar = $url;
            $user->save();
        }

        $token = $user->createToken('API Token')->plainTextToken;
        return response()->json([
            'success' => true,
            'message' => 'Usuario creado con exito',
            'token' => $token
        ],200);
    }

    public function loginUsuario(Request $request){
        if(!Auth::attempt($request->only(['correo','password']))){
            return response()->json([
                'success' => false,
                'message' => 'Correo o password incorrectos'
            ],401);
        };
        $userLogout = Usuario::where('me',true);
        $userLogout->update([
            'me' => false
        ]);

        $user = Usuario::where('correo',$request->correo)->first();
        $user->update([
            'me'=>true,
            'latitud' => $request->latitud,
            'longitud' => $request->longitud
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Login exitoso',
            'token'=> $user->createToken("API TOKEN")->plainTextToken
        ],200);
    }

    public function obtenerUsuario():JsonResponse{
        $usuario = Usuario::where('me',true)->first();

        return response()->json([
            'success' => true,
            'usuario' => $usuario
        ],201);
    }

    public function logout():JsonResponse{
        $userLogout = Usuario::where('me',true);
        $userLogout->update([
            'me' => false
        ]);

        return response()->json([
            'success' => true
        ],201);
    }
}
