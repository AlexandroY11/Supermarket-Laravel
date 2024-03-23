<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $productos = Producto::paginate();

        return view('productos.index', compact('productos'));
    }

    public function create(){
        return view('productos.create');
    }
    
    public function store(Request $request){

        $request->validate([
            'nombre_producto' => 'required|min:3',
            'descripcion_producto' => 'required',
            'categoria' => 'required',
            'medida_producto' => 'required',
            'precio' => 'required|min:6',
            'stock' => 'required',
        ]);

        
        $producto = new Producto();

        $producto->nombre_producto = $request->nombre_producto;
        $producto->categoria = $request->categoria;
        $producto->descripcion_producto = $request->descripcion_producto;
        $producto->medida_producto = $request->medida_producto;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;

        $producto->save();

        return redirect()->route('productos.show', $producto->id);

    }

    public function show($id){

        $producto = Producto::find($id);

        // return view('productos.show', ['id' => $id]);
        return view('productos.show', compact('producto'));
    }

    public function edit(Producto $producto){

        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto){
        
        $request->validate([
            'nombre_producto' => 'required|min:3',
            'descripcion_producto' => 'required',
            'categoria' => 'required',
            'medida_producto' => 'required',
            'precio' => 'required|min:6',
            'stock' => 'required',
        ]);

        // return $request->all();

        $producto->nombre_producto = $request->nombre_producto;
        $producto->categoria = $request->categoria;
        $producto->descripcion_producto = $request->descripcion_producto;
        $producto->medida_producto = $request->medida_producto;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;

        $producto->save();

        return redirect()->route('productos.show', $producto);
    }

    public function destroy(Producto $producto){
        // return $producto;

        $producto->delete();

        return redirect()->route('productos.index');
    }
}
