<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestProducto;
use App\Models\Categoria;
use App\Models\Imagen;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $productos = Producto::paginate();

        return view('productos.index', compact('productos'));
    }

    public function create(){
        $categorias = Categoria::all();
        return view('productos.create', compact('categorias'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:productos,slug',
            'descripcion' => 'required|string',
            'medida' => 'required|string',
            'categoria_id' => 'required|exists:categorias,id',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $producto = Producto::create($request->all());

        if ($request->has('imagenes')) {
            foreach ($request->imagenes as $ruta_imagen) {
                Imagen::create([
                    'producto_id' => $producto->id,
                    'ruta_imagen' => $ruta_imagen
                ]);
            }
        }

        return redirect()->route('productos.index')->with('success', 'Producto creado con éxito.');
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
            'nombre' => 'required|min:3',
            'slug' => 'required|unique:productos,slug,' . $producto->id,
            'descripcion' => 'required',
            'categoria' => 'required',
            'medida' => 'required',
            'precio' => 'required|min:6',
            'stock' => 'required',
        ]);

        // return $request->all();

        // $producto->nombre = $request->nombre;
        // $producto->categoria = $request->categoria;
        // $producto->descripcion = $request->descripcion;
        // $producto->medida = $request->medida;
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

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->file->extension();
        $request->file->storeAs('public/productos', $imageName);

        return response()->json(['ruta_imagen' => $imageName]);
    }
}
