<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Ejemplo 1 : Regresando el Texto
// Route::get('/texto', function () {
//     return '<h1>esto es un texto de prueba</h1>';
// });
//Ejemplo 2 : con array
// Route::get('/arreglo', function () {
//     return $arreglo = [
//        'id' => '1',
//        'Descripcion' => 'Producto 1'
//     ];
//     return $arreglo ;
// });
//Ejemplo 3 : Parámetros
// Route::get('/nombre/{nombre}', function ($nombre) {
//     return '<h1>El nombre es: '.$nombre.'</h1>';
// });
//Ejemplo 4 : Parámetros por default
// Route::get('/cliente/{cliente?}', function ($cliente='Cliente General') {
//     return '<h1>El Cliente es: '.$cliente.'</h1>';
// });
//----------Ejemplo 5--------- :

// Route::get('/ruta1', function () {
//     return '<h1>Vista de la ruta 1: </h1>';
// })->name('ruta1');

// Route::get('/ruta2', function () {
    // return '<h1>Vista de la ruta 2: </h1>';
//     return redirect()->route('ruta1');

// });

//----------Ejemplo 6--------- :
// Route::get('/usuario/{usuario}' , function ($usuario) {
//     return '<h1>El usuario es: '.$usuario.' </h1>';
// })->where('usuario','[0-9]+');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
