<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categorias = Categoria::all();

        // return view('categorias.index', [$categorias => 'categorias']);
        return view('categorias.index', compact('categorias'));
    }

    public function create(){
        return view('categorias.create');
    }

    public function show($id){

        $categoria = Categoria::find($id);

        return view('categorias.show', compact('categoria'));
    }

    public function store(Request $request){

        $request->validate([
            'nombre' => 'required|min:3',
            'descripcion' => 'required',
        ]);

        
        $categoria = new Categoria();

        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;

        $categoria->save();

        return redirect()->route('categorias.show', $categoria->id);

    }

}
