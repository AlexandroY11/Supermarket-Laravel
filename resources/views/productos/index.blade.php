@extends('layouts.plantilla')

@section('title', 'Productos')

@section('body')

    <h1 class="mb-4">Bienvenidos a Productos</h1>
    <div class="row">
        <a class="btn btn-principal mb-4 w-25" href="{{route('productos.create')}}">Crear Producto</a>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($productos as $producto)
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <a href="{{route('productos.show', $producto->id)}}">
                            <h5 class="card-title">{{ $producto->nombre_producto }}</h5>
                        </a>
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
        @endforeach
    </div>

    {{-- PAGINATE --}}
    {{-- {{$productos->links()}} --}}

@endsection
