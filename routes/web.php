<?php

use Illuminate\Support\Facades\Route;


Route::get('/laravel', function () {
    return view('welcome');
});

Route::view('/', 'index')->name("home");

Route::view('/login', 'login')->name('login');

Route::view('/registro', 'registro')->name('registro');
Route::post('/registro', 'App\Http\Controllers\Registro@store');

//Route::post('/user', 'user')->name('user');




Route::get('/user', 'App\Http\Controllers\UserCont@index')->name('usercontro');


Route::view('/about', 'about')->name("about");



//Rutas para admin
Route::get("/admin", 'App\Http\Controllers\AdminCont@index')->name('admin');
