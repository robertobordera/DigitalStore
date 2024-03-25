<?php


use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('/productos',ProductoController::class);
Route::get('/productos/{id}/valoraciones', [ProductoController::class, 'valoraciones']);

Route::get('/usuarios/{id}/reseñas', [UsuarioController::class, 'obtenerReseñasRealizas']);
Route::get('/usuarios/{id}/productosMarketPlace',[UsuarioController::class,'ObtenerProductosSubidos']);
Route::get('/usuarios/productosMarketPlace',[UsuarioController::class,'ObtenerProductosTodos']);
Route::get('/usuarios/{idUsuario}/productosMarketPlace/{idProducto}',[UsuarioController::class,'ventas']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
