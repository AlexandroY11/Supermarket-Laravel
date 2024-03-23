@extends('layouts.plantilla')

@section('title', 'Categoría || ' . $categoria->idcategoria)

@section('body')
<header>
    <a href="{{ route('categorias.index') }}" style="text-decoration: none; display: flex; align-items: center; font-size:16px;">
        <i class="fas fa-chevron-left"></i>
        <span style="margin-left: 5px;">Regresar a Inicio</span>
    </a>
</header>

    <h1 class="mb-4">Categoría {{$categoria->nombre_categoria}}</h1>
    <div class="row align-items-center mb-4">
        <div class="col-md-4">
            {{-- <a class="btn btn-principal me-3 w-100" href="{{route('categorias.edit', $categoria->idcategoria)}}">Editar Producto</a> --}}
        </div>
        <div class="col-md-4">
            {{-- <button type="button" class="btn btn-danger w-100 me-3" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">
                Eliminar Producto
            </button> --}}
        </div>
    </div>

    <!-- Modal Eliminar -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar Eliminación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                ¿Estás seguro de que deseas eliminar la categoría <strong>{{$categoria->nombre_categoria}}</strong>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    {{-- <form id="deleteForm" action="{{route('categorias.destroy', $categoria->id)}}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>


    
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title"><strong>{{ $categoria->nombre_categoria }}</strong></h5>
                    <p class="card-text">{{ $categoria->descripcion_categoria }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>ID:</strong> {{ $categoria->id }}</li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('deleteProductButton').addEventListener('click', function() {
            var modalEliminar = new bootstrap.Modal(document.getElementById('confirmDeleteModal'));
            modalEliminar.show();
        });
    </script>
@endsection
