<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('categorias.index');
    }

    // public function create(){
    //     return view('productos.create');
    // }

    // public function show($id){
    //     // return view('productos.show', ['id' => $id]);
    //     return view('productos.show', compact('id'));
    // }
}
