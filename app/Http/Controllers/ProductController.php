<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('productos.index');
    }

    public function create(){
        return view('productos.create');
    }

    public function show($id){
        // return view('productos.show', ['id' => $id]);
        return view('productos.show', compact('id'));
    }
}
