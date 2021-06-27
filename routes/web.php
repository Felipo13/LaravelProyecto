<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/laravel', function () {
    return view('welcome');
});

Route::view('/', 'index')->name("home");


Route::view('/login', 'login')->name('login');


//-----------------------Login Google------------------
Route::get('auth/redirect', 'App\Http\Controllers\Social@redirect');

Route::get('callback/google', 'App\Http\Controllers\Social@callback');



Route::view('/registro', 'registro')->name('registro');
Route::post('/registro', 'App\Http\Controllers\Registrar@store')->name('registro.store');




Route::get('/user', 'App\Http\Controllers\UserCont@index')->name('usercontro');



Route::view('/about', 'about')->name("about");


//Rutas para admin;
Route::get("/admin", 'App\Http\Controllers\AdminCont@index')->name('admin.index');

//crud de productos
Route::get('/admin/{idResta}', 'App\Http\Controllers\Productos@index')->name('produc.index');
Route::get('/producto/{idProducto}', 'App\Http\Controllers\Productos@show')->name('produc.show');

Route::get('/product/NewProduc', 'App\Http\Controllers\Productos@create')->name('produc.create');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
