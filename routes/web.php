<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UsuarioController;

Route::get('/', HomeController::class, 'index')->name('home');

//Grupo de routes
Route::controller(ProductController::class)->group(function(){
    Route::get('/productos','index')->name('productos');
    Route::get('productos/crear','create');
    Route::get('productos/{id}','show');
});

Route::controller(UsuarioController::class)->group((function(){
    Route::get('/login','login')->name('login');
    Route::get('/registro','registro')->name('registro');
}));


Route::controller(CategoryController::class)->group(function(){
    Route::get('/categorias', 'index')->name('categorias');
});
