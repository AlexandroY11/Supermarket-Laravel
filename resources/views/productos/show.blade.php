@extends('layouts.plantilla')

@section('title', 'Producto || ' . $producto->id)

@section('body')
<header>
    <a href="{{ route('productos.index') }}" style="text-decoration: none; display: flex; align-items: center; font-size:16px;">
        <i class="fas fa-chevron-left"></i>
        <span style="margin-left: 5px;">Regresar a Inicio</span>
    </a>
</header>

<h1 class="mb-4">Producto {{$producto->nombre}}</h1>
<div class="row align-items-center mb-4">
    <div class="col-md-4">
        <a class="btn btn-principal me-3 w-100" href="{{ route('productos.edit', $producto->slug) }}">Editar Producto</a>
    </div>
    <div class="col-md-4">
        <button type="button" class="btn btn-danger w-100 me-3" id="deleteProductButton">
            Eliminar Producto
        </button>
    </div>
</div>

<form id="deleteForm" action="{{ route('productos.destroy', $producto->slug) }}" method="POST" style="display: none;">
    @method('delete')
    @csrf
</form>

<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title"><strong>{{ $producto->nombre }}</strong></h5>
                <p class="card-text">{{ $producto->descripcion }}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>ID:</strong> {{ $producto->id }}</li>
                <li class="list-group-item"><strong>Categoría:</strong> {{ $producto->categoria }}</li>
                <li class="list-group-item"><strong>Medida:</strong> {{ $producto->medida }}</li>
                <li class="list-group-item"><strong>Precio:</strong> {{ $producto->precio }}</li>
                <li class="list-group-item"><strong>Stock:</strong> {{ $producto->stock }}</li>
            </ul>
        </div>
    </div>
</div>

@if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '¡Éxito!',
            text: '{{ session('success') }}',
            confirmButtonText: 'OK'
        });
    </script>
@endif

<script>
    document.getElementById('deleteProductButton').addEventListener('click', function() {
        Swal.fire({
            title: "¿Seguro deseas eliminar el producto?",
            text: "No podrás revertir esta acción",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "¡Sí, eliminarlo!"
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm').submit();
            }
        });
    });
</script>
@endsection
