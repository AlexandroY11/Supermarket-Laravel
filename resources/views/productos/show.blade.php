@extends('layouts.plantilla')

@section('title', 'Producto || ' . $producto->id)

@section('body')
<header>
    <a href="{{ route('productos.index') }}" style="text-decoration: none; display: flex; align-items: center; font-size:16px;">
        <i class="fas fa-chevron-left"></i>
        <span style="margin-left: 5px;">Regresar a Inicio</span>
    </a>
</header>

    <h1>Producto {{$producto->nombre_producto}}</h1>
    <div class="row">
        <a class="btn btn-principal mb-4 me-3 w-25" href="{{route('productos.edit', $producto->id)}}">Editar Producto</a>
        <form action="{{route('productos.destroy', $producto->id)}}" method="POST">

            @method('delete')

            @csrf

            <button type="submit" class="btn btn-danger mb-4 w-25">Eliminar Producto</button>
        </form>
    </div>
    
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{ $producto->nombre_producto }}</h5>
                    <p class="card-text">{{ $producto->descripcion_producto }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">ID: {{ $producto->id }}</li>
                    <li class="list-group-item">Categoría: {{ $producto->categoria }}</li>
                    <li class="list-group-item">Medida: {{ $producto->medida_producto }}</li>
                    <li class="list-group-item">Precio: {{ $producto->precio }}</li>
                    <li class="list-group-item">Stock: {{ $producto->stock }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
