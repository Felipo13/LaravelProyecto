<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/laravel', function () {
    return view('welcome');
});

Route::view('/', 'index')->name("home");

Route::view('/login', 'login')->name('login');



Route::view('/registro', 'registro')->name('registro');
Route::post('/registro', 'App\Http\Controllers\Registrar@store')->name('registro.store');



//Route::post('/user', 'user')->name('user');




Route::post('/user', 'App\Http\Controllers\UserCont@index')->name('usercontro');



Route::view('/about', 'about')->name("about");


//Rutas para admin;
Route::get("/admin", 'App\Http\Controllers\AdminCont@index')->name('admin.index');

//crud de productos
Route::get('/admin/{Id_Rest}', 'App\Http\Controllers\Producto@index')->name('produc.index');
Route::get('/producto/{Id_Product}', 'App\Http\Controllers\Producto@show')->name('produc.show');

Route::get('/product/NewProduc', 'App\Http\Controllers\Producto@create')->name('produc.create');
