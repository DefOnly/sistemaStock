<?php

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

Route::get('/', function () {
    return view('plantilla/login');
})->name('close');

Route::get('login', function () {
   return view('contenido/contenido');
})->name('sign');

Route::get('list', function () {
   return view('contenido/listar');
})->name('listar');

Route::get('add', function () {
   return view('contenido/agregar');
})->name('agregar');

Route::get('get', function () {
   return view('contenido/consultar');
})->name('consultar');

Route::get('editar', function () {
   return view('contenido/editar');
})->name('editar');


