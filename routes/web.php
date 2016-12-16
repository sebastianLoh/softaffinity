<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('login','nuevo_controlador@login');

/*
Route::get('/', function () {
    return view('home');
});


Route::get('/hola{nombre}', function ($nombre) {
    return 'Hola Mundo! Como andas '. $nombre .' ?';
});


Route::get('home', function () {
    return view('home');
});*/

