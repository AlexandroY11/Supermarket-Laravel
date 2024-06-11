<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestProducto;
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
    
    public function store(RequestProducto $request){
        
        // $producto = new Producto();

        // $producto->nombre_producto = $request->nombre_producto;
        // $producto->categoria = $request->categoria;
        // $producto->descripcion_producto = $request->descripcion_producto;
        // $producto->medida_producto = $request->medida_producto;
        // $producto->precio = $request->precio;
        // $producto->stock = $request->stock;

        // $producto->save();

        $producto = Producto::create($request->all());

        return redirect()->route('productos.show', $producto->slug)->with('success', 'Producto creado correctamente');

    } 

    public function show(Producto $producto) {

        // return view('productos.show', ['id' => $id]);
        return view('productos.show', compact('producto'));
    }

    public function edit(Producto $producto){

        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto){
        
        $request->validate([
            'nombre_producto' => 'required|min:3',
            'slug' => 'required|unique:productos,slug,' . $producto->id,
            'descripcion_producto' => 'required',
            'categoria' => 'required',
            'medida_producto' => 'required',
            'precio' => 'required|min:6',
            'stock' => 'required',
        ]);

        // return $request->all();

        // $producto->nombre_producto = $request->nombre_producto;
        // $producto->categoria = $request->categoria;
        // $producto->descripcion_producto = $request->descripcion_producto;
        // $producto->medida_producto = $request->medida_producto;
        // $producto->precio = $request->precio;
        // $producto->stock = $request->stock;

        // $producto->save();

        $producto->update($request->all());

        return redirect()->route('productos.show', $producto)->with('success', 'Producto actualizado correctamente');
    }

    public function destroy(Producto $producto){
        // return $producto;

        $producto->delete();

        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente');
    
    }
}
