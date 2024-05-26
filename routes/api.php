<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\FavoritoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProductoUsuController;
use App\Http\Controllers\ReseñaController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Rutas para productos
Route::resource('/productos',ProductoController::class);
Route::get('/productos/{id}/valoraciones', [ProductoController::class, 'valoraciones']);
Route::get('/productos/categoria/{id}', [ProductoController::class, 'productosCategoria']);
Route::get('/productos/limit/{numero}/categoria/{categoria}', [ProductoController::class, 'limitProductos']);

// Rutas para usuarios
Route::prefix('usuarios')->group(function () {
    Route::get('/{id}/reseñas', [UsuarioController::class, 'obtenerReseñasRealizas']);
    Route::get('/misProductos/{id}', [UsuarioController::class, 'ObtenerMisProductos']);
    Route::get('/misVentas', [UsuarioController::class, 'ObtenerMisProductosVendidos']);
    Route::get('/comentarios', [UsuarioController::class, 'MisComentarios']);
    Route::get('/me', [UsuarioController::class, 'misDatos']);
    Route::get('/datos/{id}', [UsuarioController::class, 'datosUsuarios']);
    Route::post('/perfil', [UsuarioController::class, 'CambiarDatos']);
    Route::post('/comentarios/{id}', [UsuarioController::class, 'EditarComentarios']);
    Route::put('/actualizarCorreo', [UsuarioController::class, 'actualizarCorreo']);
    Route::put('/actualizarPassword', [UsuarioController::class, 'actualizarPassword']);
    Route::put('/actualizarDireccion', [UsuarioController::class, 'actualizarDireccion']);
    Route::put('/actualizarNombre', [UsuarioController::class, 'actualizarNombre']);
});

// Rutas para marketplace
Route::prefix('marketPlace')->group(function () {
    Route::get('/productos/usuarios/{idUsuario}', [ProductoUsuController::class, 'ObtenerProductosSubidos']);
    Route::get('/productos', [ProductoUsuController::class, 'ObtenerProductosTodos']);
    Route::get('/producto/{idProducto}', [ProductoUsuController::class, 'ObtenerProducto']);
    Route::get('/{idUsuario}/productos/{idProducto}', [ProductoUsuController::class, 'ventas']);
    Route::get('/productos/comentarios/{idProducto}', [ProductoUsuController::class, 'ObtenerComentariosProducto']);
    Route::get('/datosProductoVendedor/{id}', [ProductoUsuController::class, 'obtenerDatosProductoVendedor']);
    Route::post('/subirProducto', [ProductoUsuController::class, 'SubirProducto']);
    Route::post('/{idProducto}/comentarios', [ProductoUsuController::class, 'DejarComentario']);
});

// Rutas para autenticación
Route::prefix('auth')->group(function () {
    Route::post('/registro', [AuthController::class, 'crearUsuario']);
    Route::post('/login', [AuthController::class, 'loginUsuario']);
    Route::get('/obtenerUsuario', [AuthController::class, 'obtenerUsuario']);
    Route::get('/logout', [AuthController::class, 'logout']);
});

// Rutas para carrito
Route::prefix('carrito')->group(function () {
    Route::get('/mostrar_carrito/{idUsuario}', [CarritoController::class, 'mostrarProductosCarrito']);
    Route::post('/añadir_carrito', [CarritoController::class, 'añadirProducto']);
    Route::delete('/usuario/{idUsuario}/borrar/{idProducto}', [CarritoController::class, 'borrarProductoCarrito']);
    Route::delete('/usuario/{idUsuario}/vaciar', [CarritoController::class, 'vaciarCarrito']);
});

// Rutas para favoritos
Route::prefix('favoritos')->group(function () {
    Route::get('/mostrar_favoritos/{idUsuario}', [FavoritoController::class, 'mostrarProductosFavoritos']);
    Route::post('/anyadir_favorito', [FavoritoController::class, 'añadirFavorito']);
    Route::delete('/usuario/{idUsuario}/borrar/{idProductousu}', [FavoritoController::class, 'borrarProductoFavoritos']);
});

// Rutas para solicitudes
Route::prefix('solicitud')->group(function () {
    Route::get('/solicitudes/{id}', [SolicitudController::class, 'leerSolicitud']);
    Route::get('/solicitudes2/{id}', [SolicitudController::class, 'leerSolicitudEnviador']);
    Route::post('/enviar', [SolicitudController::class, 'enviarSolicitud']);
});

// Rutas para solicitudes
Route::prefix('reseña')->group(function () {
    Route::get('/realizadas/{id}', [ReseñaController::class, 'obtenerReseñasRealizadas']);
    Route::get('/recibidas/{id}', [ReseñaController::class, 'obtenerReseñasRecibidas']);
    Route::post('/enviar', [ReseñaController::class, 'crearReseña']);
});
