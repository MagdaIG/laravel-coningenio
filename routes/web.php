<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.Inicio');
});
Route::get('/nuestros-servicios', function () {
    return view('pages.NuestrosServicios');
});
Route::get('/contactanos', function () {
    return view('pages.Contacto');
});
Route::get('/nosotros', function () {
    return view('pages.Nosotros');
});
// Esta ruta llamara a la funcion contenido dentro del controlador NosotrosController
Route::get('/v1/about-us', [\App\Http\Controllers\NosotrosController::class, 'contenido']);
// Esta ruta llamara a la funcion contenido dentro del controlador ServiciosController
Route::get('/v1/services', [\App\Http\Controllers\ServiciosController::class, 'contenido']);

