<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsuarioController;

Route::get('/', HomeController::class);

//Grupo de routes
Route::controller(ProductController::class)->group(function(){
    Route::get('/productos','index');
    Route::get('productos/crear','create');
    Route::get('productos/{id}','show');
});

Route::controller(UsuarioController::class)->group((function(){
    Route::get('/login','login');
    Route::get('/usuarios/registro','registro');
}));