<?php


use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProductoUsuController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('/productos',ProductoController::class);
Route::get('/productos/{id}/valoraciones', [ProductoController::class, 'valoraciones']);

Route::get('/usuarios/{id}/reseñas', [UsuarioController::class, 'obtenerReseñasRealizas']);
Route::get('/usuarios/misProductos',[UsuarioController::class,'ObtenerMisProductos']);
Route::get('/usuarios/comentarios',[UsuarioController::class,'MisComentarios']);
Route::post('/usuarios/perfil', [UsuarioController::class, 'CambiarDatos']);
Route::post('/usuarios/comentarios/{id}',[UsuarioController::class,'EditarComentarios']);


Route::get('/productosusu/usuarios/{idUsuario}/productosMarketPlace',[ProductoUsuController::class,'ObtenerProductosSubidos']);
Route::get('/productosusu/productosMarketPlace',[ProductoUsuController::class,'ObtenerProductosTodos']);
Route::get('/productosusu/{idUsuario}/productosMarketPlace/{idProducto}',[ProductoUsuController::class,'ventas']);
Route::get('/productosusu/productosMarketPlace/comentarios/{idProducto}',[ProductoUsuController::class,'ObtenerComentariosProducto']);
Route::post('/productosusu/{idUsuario}/productosMarketPlace/{producto}',[ProductoUsuController::class,'SubirProducto']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
