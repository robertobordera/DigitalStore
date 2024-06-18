<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/productos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'productos.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'productos.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/productos/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'productos.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/usuarios/misVentas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h1XeepS1oPLDlwkf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/usuarios/comentarios' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fMN7krBSovCq1jlE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/usuarios/me' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hghqB4c7uB4tlNa1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/usuarios/perfil' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1N8XApqNlDfhdtWu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/usuarios/actualizarCorreo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zIwAot9OW5EPVTkh',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/usuarios/actualizarPassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H0LztiixUThgx8Lm',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/usuarios/actualizarDireccion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4IXLwJeb24BZGNWf',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/usuarios/actualizarNombre' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ncqP2Nbgx4095VjA',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/marketPlace/productos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::myzhtJxI3A6155QM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/marketPlace/subirProducto' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yYHBbnNZl3kGQn1N',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/registro' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GTMYNWE06pSfjqk1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UX7WRwALwrnNbEy3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/obtenerUsuario' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lPpRSj7ymAnaiTVy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wkgnkVU2xy9I1sq5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/carrito/añadir_carrito' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hgWwzVAB1P6HGjuX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/favoritos/anyadir_favorito' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EH28FJJXy8e9AFjN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/solicitud/enviar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d5VJCBWHjrBX1LNN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/reseña/enviar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MYRLOeKOpQGNjxSW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/api/(?|productos/(?|([^/]++)(?|(*:39)|/(?|edit(*:54)|valoraciones(*:73))|(*:81))|categoria/([^/]++)(*:107)|limit/([^/]++)/categoria/([^/]++)(*:148))|usuarios/(?|([^/]++)/reseñas(*:186)|misProductos/([^/]++)(*:215)|datos/([^/]++)(*:237)|comentarios/([^/]++)(*:265))|marketPlace/(?|producto(?|s/usuarios/([^/]++)(*:319)|/([^/]++)(*:336))|([^/]++)/productos/([^/]++)(*:372)|productos/comentarios/([^/]++)(*:410)|datosProductoVendedor/([^/]++)(*:448)|([^/]++)/comentarios(*:476))|carrito/(?|mostrar_carrito/([^/]++)(*:520)|usuario/([^/]++)/(?|borrar/([^/]++)(*:563)|vaciar(*:577)))|favoritos/(?|mostrar_favoritos/([^/]++)(*:626)|usuario/([^/]++)/borrar/([^/]++)(*:666))|solicitud/solicitudes(?|/([^/]++)(*:708)|2/([^/]++)(*:726))|reseña/re(?|alizadas/([^/]++)(*:765)|cibidas/([^/]++)(*:789))))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'productos.show',
          ),
          1 => 
          array (
            0 => 'producto',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      54 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'productos.edit',
          ),
          1 => 
          array (
            0 => 'producto',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TowavuTXy197xsmM',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      81 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'productos.update',
          ),
          1 => 
          array (
            0 => 'producto',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'productos.destroy',
          ),
          1 => 
          array (
            0 => 'producto',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      107 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AY7jvZs3DSbnXhYK',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      148 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rmoJX14HCLIkCOF0',
          ),
          1 => 
          array (
            0 => 'numero',
            1 => 'categoria',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      186 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8gTlnLptKOidVt8V',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      215 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dvKtphOL24NmoiJ6',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      237 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ssRStDnV4Gde9nIx',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      265 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ut0S6yfVUFHzVV8I',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      319 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uKFI3F3yE3gjzbPC',
          ),
          1 => 
          array (
            0 => 'idUsuario',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      336 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y3uVauywqqVgMoH2',
          ),
          1 => 
          array (
            0 => 'idProducto',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      372 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pEdNCIPz16aq7RrQ',
          ),
          1 => 
          array (
            0 => 'idUsuario',
            1 => 'idProducto',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      410 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c0v4TfN93gflMv05',
          ),
          1 => 
          array (
            0 => 'idProducto',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      448 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r9swwEGHMAWxNol3',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      476 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cDjHWuxwzTvVD5jR',
          ),
          1 => 
          array (
            0 => 'idProducto',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      520 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4wUDmPvfiD0OsyeF',
          ),
          1 => 
          array (
            0 => 'idUsuario',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      563 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g6voXLWTLIabbAHP',
          ),
          1 => 
          array (
            0 => 'idUsuario',
            1 => 'idProducto',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      577 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JjPOAtAbXnnSAsHj',
          ),
          1 => 
          array (
            0 => 'idUsuario',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      626 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OHuClpUYY0ooceht',
          ),
          1 => 
          array (
            0 => 'idUsuario',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      666 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CmGjRH7Vs7uxcZfU',
          ),
          1 => 
          array (
            0 => 'idUsuario',
            1 => 'idProductousu',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      708 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ivMdxH73wPVoci8u',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      726 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f2us49PdWjiKYkYA',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      765 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8f7rFPtCtEE98LVA',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      789 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8pgvC3HU0y63cmxH',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'productos.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/productos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'productos.index',
        'uses' => 'App\\Http\\Controllers\\ProductoController@index',
        'controller' => 'App\\Http\\Controllers\\ProductoController@index',
        'namespace' => NULL,
        'prefix' => 'api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'productos.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/productos/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'productos.create',
        'uses' => 'App\\Http\\Controllers\\ProductoController@create',
        'controller' => 'App\\Http\\Controllers\\ProductoController@create',
        'namespace' => NULL,
        'prefix' => 'api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'productos.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/productos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'productos.store',
        'uses' => 'App\\Http\\Controllers\\ProductoController@store',
        'controller' => 'App\\Http\\Controllers\\ProductoController@store',
        'namespace' => NULL,
        'prefix' => 'api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'productos.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/productos/{producto}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'productos.show',
        'uses' => 'App\\Http\\Controllers\\ProductoController@show',
        'controller' => 'App\\Http\\Controllers\\ProductoController@show',
        'namespace' => NULL,
        'prefix' => 'api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'productos.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/productos/{producto}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'productos.edit',
        'uses' => 'App\\Http\\Controllers\\ProductoController@edit',
        'controller' => 'App\\Http\\Controllers\\ProductoController@edit',
        'namespace' => NULL,
        'prefix' => 'api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'productos.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/productos/{producto}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'productos.update',
        'uses' => 'App\\Http\\Controllers\\ProductoController@update',
        'controller' => 'App\\Http\\Controllers\\ProductoController@update',
        'namespace' => NULL,
        'prefix' => 'api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'productos.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/productos/{producto}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'productos.destroy',
        'uses' => 'App\\Http\\Controllers\\ProductoController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProductoController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TowavuTXy197xsmM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/productos/{id}/valoraciones',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductoController@valoraciones',
        'controller' => 'App\\Http\\Controllers\\ProductoController@valoraciones',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::TowavuTXy197xsmM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AY7jvZs3DSbnXhYK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/productos/categoria/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductoController@productosCategoria',
        'controller' => 'App\\Http\\Controllers\\ProductoController@productosCategoria',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::AY7jvZs3DSbnXhYK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rmoJX14HCLIkCOF0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/productos/limit/{numero}/categoria/{categoria}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductoController@limitProductos',
        'controller' => 'App\\Http\\Controllers\\ProductoController@limitProductos',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::rmoJX14HCLIkCOF0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8gTlnLptKOidVt8V' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/usuarios/{id}/reseñas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@obtenerReseñasRealizas',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@obtenerReseñasRealizas',
        'namespace' => NULL,
        'prefix' => 'api/usuarios',
        'where' => 
        array (
        ),
        'as' => 'generated::8gTlnLptKOidVt8V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dvKtphOL24NmoiJ6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/usuarios/misProductos/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@ObtenerMisProductos',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@ObtenerMisProductos',
        'namespace' => NULL,
        'prefix' => 'api/usuarios',
        'where' => 
        array (
        ),
        'as' => 'generated::dvKtphOL24NmoiJ6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h1XeepS1oPLDlwkf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/usuarios/misVentas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@ObtenerMisProductosVendidos',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@ObtenerMisProductosVendidos',
        'namespace' => NULL,
        'prefix' => 'api/usuarios',
        'where' => 
        array (
        ),
        'as' => 'generated::h1XeepS1oPLDlwkf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fMN7krBSovCq1jlE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/usuarios/comentarios',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@MisComentarios',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@MisComentarios',
        'namespace' => NULL,
        'prefix' => 'api/usuarios',
        'where' => 
        array (
        ),
        'as' => 'generated::fMN7krBSovCq1jlE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hghqB4c7uB4tlNa1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/usuarios/me',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@misDatos',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@misDatos',
        'namespace' => NULL,
        'prefix' => 'api/usuarios',
        'where' => 
        array (
        ),
        'as' => 'generated::hghqB4c7uB4tlNa1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ssRStDnV4Gde9nIx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/usuarios/datos/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@datosUsuarios',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@datosUsuarios',
        'namespace' => NULL,
        'prefix' => 'api/usuarios',
        'where' => 
        array (
        ),
        'as' => 'generated::ssRStDnV4Gde9nIx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1N8XApqNlDfhdtWu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/usuarios/perfil',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@CambiarDatos',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@CambiarDatos',
        'namespace' => NULL,
        'prefix' => 'api/usuarios',
        'where' => 
        array (
        ),
        'as' => 'generated::1N8XApqNlDfhdtWu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ut0S6yfVUFHzVV8I' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/usuarios/comentarios/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@EditarComentarios',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@EditarComentarios',
        'namespace' => NULL,
        'prefix' => 'api/usuarios',
        'where' => 
        array (
        ),
        'as' => 'generated::ut0S6yfVUFHzVV8I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zIwAot9OW5EPVTkh' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/usuarios/actualizarCorreo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@actualizarCorreo',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@actualizarCorreo',
        'namespace' => NULL,
        'prefix' => 'api/usuarios',
        'where' => 
        array (
        ),
        'as' => 'generated::zIwAot9OW5EPVTkh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H0LztiixUThgx8Lm' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/usuarios/actualizarPassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@actualizarPassword',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@actualizarPassword',
        'namespace' => NULL,
        'prefix' => 'api/usuarios',
        'where' => 
        array (
        ),
        'as' => 'generated::H0LztiixUThgx8Lm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4IXLwJeb24BZGNWf' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/usuarios/actualizarDireccion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@actualizarDireccion',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@actualizarDireccion',
        'namespace' => NULL,
        'prefix' => 'api/usuarios',
        'where' => 
        array (
        ),
        'as' => 'generated::4IXLwJeb24BZGNWf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ncqP2Nbgx4095VjA' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/usuarios/actualizarNombre',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@actualizarNombre',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@actualizarNombre',
        'namespace' => NULL,
        'prefix' => 'api/usuarios',
        'where' => 
        array (
        ),
        'as' => 'generated::ncqP2Nbgx4095VjA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uKFI3F3yE3gjzbPC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/marketPlace/productos/usuarios/{idUsuario}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductoUsuController@ObtenerProductosSubidos',
        'controller' => 'App\\Http\\Controllers\\ProductoUsuController@ObtenerProductosSubidos',
        'namespace' => NULL,
        'prefix' => 'api/marketPlace',
        'where' => 
        array (
        ),
        'as' => 'generated::uKFI3F3yE3gjzbPC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::myzhtJxI3A6155QM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/marketPlace/productos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductoUsuController@ObtenerProductosTodos',
        'controller' => 'App\\Http\\Controllers\\ProductoUsuController@ObtenerProductosTodos',
        'namespace' => NULL,
        'prefix' => 'api/marketPlace',
        'where' => 
        array (
        ),
        'as' => 'generated::myzhtJxI3A6155QM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Y3uVauywqqVgMoH2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/marketPlace/producto/{idProducto}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductoUsuController@ObtenerProducto',
        'controller' => 'App\\Http\\Controllers\\ProductoUsuController@ObtenerProducto',
        'namespace' => NULL,
        'prefix' => 'api/marketPlace',
        'where' => 
        array (
        ),
        'as' => 'generated::Y3uVauywqqVgMoH2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pEdNCIPz16aq7RrQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/marketPlace/{idUsuario}/productos/{idProducto}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductoUsuController@ventas',
        'controller' => 'App\\Http\\Controllers\\ProductoUsuController@ventas',
        'namespace' => NULL,
        'prefix' => 'api/marketPlace',
        'where' => 
        array (
        ),
        'as' => 'generated::pEdNCIPz16aq7RrQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c0v4TfN93gflMv05' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/marketPlace/productos/comentarios/{idProducto}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductoUsuController@ObtenerComentariosProducto',
        'controller' => 'App\\Http\\Controllers\\ProductoUsuController@ObtenerComentariosProducto',
        'namespace' => NULL,
        'prefix' => 'api/marketPlace',
        'where' => 
        array (
        ),
        'as' => 'generated::c0v4TfN93gflMv05',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r9swwEGHMAWxNol3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/marketPlace/datosProductoVendedor/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductoUsuController@obtenerDatosProductoVendedor',
        'controller' => 'App\\Http\\Controllers\\ProductoUsuController@obtenerDatosProductoVendedor',
        'namespace' => NULL,
        'prefix' => 'api/marketPlace',
        'where' => 
        array (
        ),
        'as' => 'generated::r9swwEGHMAWxNol3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yYHBbnNZl3kGQn1N' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/marketPlace/subirProducto',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductoUsuController@SubirProducto',
        'controller' => 'App\\Http\\Controllers\\ProductoUsuController@SubirProducto',
        'namespace' => NULL,
        'prefix' => 'api/marketPlace',
        'where' => 
        array (
        ),
        'as' => 'generated::yYHBbnNZl3kGQn1N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cDjHWuxwzTvVD5jR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/marketPlace/{idProducto}/comentarios',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductoUsuController@DejarComentario',
        'controller' => 'App\\Http\\Controllers\\ProductoUsuController@DejarComentario',
        'namespace' => NULL,
        'prefix' => 'api/marketPlace',
        'where' => 
        array (
        ),
        'as' => 'generated::cDjHWuxwzTvVD5jR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GTMYNWE06pSfjqk1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/registro',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@crearUsuario',
        'controller' => 'App\\Http\\Controllers\\AuthController@crearUsuario',
        'namespace' => NULL,
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::GTMYNWE06pSfjqk1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UX7WRwALwrnNbEy3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@loginUsuario',
        'controller' => 'App\\Http\\Controllers\\AuthController@loginUsuario',
        'namespace' => NULL,
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::UX7WRwALwrnNbEy3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lPpRSj7ymAnaiTVy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/auth/obtenerUsuario',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@obtenerUsuario',
        'controller' => 'App\\Http\\Controllers\\AuthController@obtenerUsuario',
        'namespace' => NULL,
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::lPpRSj7ymAnaiTVy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wkgnkVU2xy9I1sq5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/auth/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\AuthController@logout',
        'namespace' => NULL,
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::wkgnkVU2xy9I1sq5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4wUDmPvfiD0OsyeF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/carrito/mostrar_carrito/{idUsuario}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\CarritoController@mostrarProductosCarrito',
        'controller' => 'App\\Http\\Controllers\\CarritoController@mostrarProductosCarrito',
        'namespace' => NULL,
        'prefix' => 'api/carrito',
        'where' => 
        array (
        ),
        'as' => 'generated::4wUDmPvfiD0OsyeF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hgWwzVAB1P6HGjuX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/carrito/añadir_carrito',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\CarritoController@añadirProducto',
        'controller' => 'App\\Http\\Controllers\\CarritoController@añadirProducto',
        'namespace' => NULL,
        'prefix' => 'api/carrito',
        'where' => 
        array (
        ),
        'as' => 'generated::hgWwzVAB1P6HGjuX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g6voXLWTLIabbAHP' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/carrito/usuario/{idUsuario}/borrar/{idProducto}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\CarritoController@borrarProductoCarrito',
        'controller' => 'App\\Http\\Controllers\\CarritoController@borrarProductoCarrito',
        'namespace' => NULL,
        'prefix' => 'api/carrito',
        'where' => 
        array (
        ),
        'as' => 'generated::g6voXLWTLIabbAHP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JjPOAtAbXnnSAsHj' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/carrito/usuario/{idUsuario}/vaciar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\CarritoController@vaciarCarrito',
        'controller' => 'App\\Http\\Controllers\\CarritoController@vaciarCarrito',
        'namespace' => NULL,
        'prefix' => 'api/carrito',
        'where' => 
        array (
        ),
        'as' => 'generated::JjPOAtAbXnnSAsHj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OHuClpUYY0ooceht' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/favoritos/mostrar_favoritos/{idUsuario}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\FavoritoController@mostrarProductosFavoritos',
        'controller' => 'App\\Http\\Controllers\\FavoritoController@mostrarProductosFavoritos',
        'namespace' => NULL,
        'prefix' => 'api/favoritos',
        'where' => 
        array (
        ),
        'as' => 'generated::OHuClpUYY0ooceht',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EH28FJJXy8e9AFjN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/favoritos/anyadir_favorito',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\FavoritoController@añadirFavorito',
        'controller' => 'App\\Http\\Controllers\\FavoritoController@añadirFavorito',
        'namespace' => NULL,
        'prefix' => 'api/favoritos',
        'where' => 
        array (
        ),
        'as' => 'generated::EH28FJJXy8e9AFjN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CmGjRH7Vs7uxcZfU' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/favoritos/usuario/{idUsuario}/borrar/{idProductousu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\FavoritoController@borrarProductoFavoritos',
        'controller' => 'App\\Http\\Controllers\\FavoritoController@borrarProductoFavoritos',
        'namespace' => NULL,
        'prefix' => 'api/favoritos',
        'where' => 
        array (
        ),
        'as' => 'generated::CmGjRH7Vs7uxcZfU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ivMdxH73wPVoci8u' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/solicitud/solicitudes/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\SolicitudController@leerSolicitud',
        'controller' => 'App\\Http\\Controllers\\SolicitudController@leerSolicitud',
        'namespace' => NULL,
        'prefix' => 'api/solicitud',
        'where' => 
        array (
        ),
        'as' => 'generated::ivMdxH73wPVoci8u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f2us49PdWjiKYkYA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/solicitud/solicitudes2/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\SolicitudController@leerSolicitudEnviador',
        'controller' => 'App\\Http\\Controllers\\SolicitudController@leerSolicitudEnviador',
        'namespace' => NULL,
        'prefix' => 'api/solicitud',
        'where' => 
        array (
        ),
        'as' => 'generated::f2us49PdWjiKYkYA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d5VJCBWHjrBX1LNN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/solicitud/enviar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\SolicitudController@enviarSolicitud',
        'controller' => 'App\\Http\\Controllers\\SolicitudController@enviarSolicitud',
        'namespace' => NULL,
        'prefix' => 'api/solicitud',
        'where' => 
        array (
        ),
        'as' => 'generated::d5VJCBWHjrBX1LNN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8f7rFPtCtEE98LVA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/reseña/realizadas/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\ReseñaController@obtenerReseñasRealizadas',
        'controller' => 'App\\Http\\Controllers\\ReseñaController@obtenerReseñasRealizadas',
        'namespace' => NULL,
        'prefix' => 'api/reseña',
        'where' => 
        array (
        ),
        'as' => 'generated::8f7rFPtCtEE98LVA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8pgvC3HU0y63cmxH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/reseña/recibidas/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\ReseñaController@obtenerReseñasRecibidas',
        'controller' => 'App\\Http\\Controllers\\ReseñaController@obtenerReseñasRecibidas',
        'namespace' => NULL,
        'prefix' => 'api/reseña',
        'where' => 
        array (
        ),
        'as' => 'generated::8pgvC3HU0y63cmxH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MYRLOeKOpQGNjxSW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/reseña/enviar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\ReseñaController@crearReseña',
        'controller' => 'App\\Http\\Controllers\\ReseñaController@crearReseña',
        'namespace' => NULL,
        'prefix' => 'api/reseña',
        'where' => 
        array (
        ),
        'as' => 'generated::MYRLOeKOpQGNjxSW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
