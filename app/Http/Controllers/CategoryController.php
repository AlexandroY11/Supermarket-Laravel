<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categorias = Categoria::paginate();

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
            'nombre_categoria' => 'required|min:3',
            'descripcion_categoria' => 'required',
        ]);

        
        $categoria = new Categoria();

        $categoria->nombre_categoria = $request->nombre_categoria;
        $categoria->descripcion_categoria = $request->descripcion_categoria;

        $categoria->save();

        return redirect()->route('categorias.show', $categoria->id);

    }

}
