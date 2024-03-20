<?php

use App\Http\Controllers\AboutController;
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

Route::controller(AboutController::class)->group(function(){
    Route::get('/sobre_nosotros', 'index')->name('sobre_nosotros');
    Route::get('/sobre_nosotros/quienes_somos', 'quienesSomos')->name('quienes_somos');
    Route::get('/sobre_nosotros/pqrs', 'pqrs')->name('pqrs');
    Route::get('/sobre_nosotros/politica_datos', 'politicaDatos')->name('politica_datos');
    Route::get('/sobre_nosotros/contactanos', 'contactanos')->name('contactanos');
    Route::get('/sobre_nosotros/preguntas_frecuentes', 'preguntasFrecuentes')->name('preguntas_frecuentes');

});
