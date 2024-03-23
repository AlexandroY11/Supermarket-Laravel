@extends('layouts.plantilla')

@section('title', 'Categorias')

@section('body')

<h1 class="mb-4">Bienvenidos a Categorías</h1>
<div class="row">
    <a class="btn btn-principal mb-4 w-25" href="{{route('categorias.create')}}">Crear Categoría</a>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($categorias as $categoria)
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <a href="{{route('categorias.show', $categoria->id)}}">
                        <h5 class="card-title">{{ $categoria->nombre_categoria }}</h5>
                    </a>
                    <p class="card-text">{{ $categoria->descripcion_categoria }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">ID: {{ $categoria->id }}</li>
                </ul>
            </div>
        </div>
    @endforeach
</div>


@endsection
