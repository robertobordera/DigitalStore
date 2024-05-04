<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProductoUsuController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('/productos',ProductoController::class);
Route::get('/productos/{id}/valoraciones', [ProductoController::class, 'valoraciones']);
Route::get('/productos/categoria/{id}', [ProductoController::class, 'productosCategoria']);

Route::get('/usuarios/{id}/reseñas', [UsuarioController::class, 'obtenerReseñasRealizas']);
Route::get('/usuarios/misProductos',[UsuarioController::class,'ObtenerMisProductos']);
Route::get('/usuarios/comentarios',[UsuarioController::class,'MisComentarios']);
Route::get('/usuarios/me',[UsuarioController::class,'misDatos']);
Route::post('/usuarios/perfil', [UsuarioController::class, 'CambiarDatos']);
Route::post('/usuarios/comentarios/{id}',[UsuarioController::class,'EditarComentarios']);
Route::put('/usuarios/actualizarCorreo',[UsuarioController::class,'actualizarCorreo']);
Route::put('/usuarios/actualizarPassword',[UsuarioController::class,'actualizarPassword']);
Route::put('/usuarios/actualizarDireccion',[UsuarioController::class,'actualizarDireccion']);
Route::put('/usuarios/actualizarNombre',[UsuarioController::class,'actualizarNombre']);


Route::get('/marketPlace/productos/usuarios/{idUsuario}',[ProductoUsuController::class,'ObtenerProductosSubidos']);
Route::get('/marketPlace/productos',[ProductoUsuController::class,'ObtenerProductosTodos']);
Route::get('/marketPlace/producto/{idProducto}',[ProductoUsuController::class,'ObtenerProducto']);
Route::get('/marketPlace/{idUsuario}/productos/{idProducto}',[ProductoUsuController::class,'ventas']);
Route::get('/marketPlace/productos/comentarios/{idProducto}',[ProductoUsuController::class,'ObtenerComentariosProducto']);
Route::post('/marketPlace/{idUsuario}/productosMarketPlace/{producto}',[ProductoUsuController::class,'SubirProducto']);

Route::post('/auth/registro',[AuthController::class,'crearUsuario']);
Route::post('/auth/login',[AuthController::class,'loginUsuario']);
Route::get('/auth/obtenerUsuario',[AuthController::class,'obtenerUsuario']);
Route::get('/auth/logout',[AuthController::class,'logout']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
