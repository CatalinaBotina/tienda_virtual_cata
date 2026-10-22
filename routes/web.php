<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});
Route::get('/Productos', function () {
    return view('Productos');
});
