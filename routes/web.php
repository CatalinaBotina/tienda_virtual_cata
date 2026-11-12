<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
<<<<<<< HEAD
return view('inicio');
});

Route::get('/productos', function () {
return view('productos');
});
=======
    return view('inicio');
});
Route::get('/Productos', function () {
    return view('Productos');
});
>>>>>>> aab71e4384f72e327df970fddd31ca014aaa7186
