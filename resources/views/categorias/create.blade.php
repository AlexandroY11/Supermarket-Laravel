@extends('layouts.plantilla')

@section('title', 'Crear || Categoria')

@section('body')
<header>
    <a href="{{ route('categorias.index') }}" style="text-decoration: none; display: flex; align-items: center; font-size:16px;">
        <i class="fas fa-chevron-left"></i>
        <span style="margin-left: 5px;">Regresar a Inicio</span>
    </a>
    
</header>

<h1 class="mt-5 mb-4">Crear Nuevo Categoria</h1>
<form action="{{route('categorias.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre de la Categoría</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}" >
        @error('nombre')
            <span class="text-error">*{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción de la Categoría</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" >{{old('descripcion')}}</textarea>
        @error('descripcion')
            <span class="text-error">*{{ $message }}</span>x
        @enderror
    </div>
    
    <button type="submit" class="btn btn-principal">Crear Categoría</button>
</form>

@endsection
