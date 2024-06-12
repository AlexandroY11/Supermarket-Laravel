@extends('layouts.plantilla')

@section('title', 'Editar || Producto')

@section('body')
<header>
    <a href="{{ route('productos.show', $producto->id) }}" style="text-decoration: none; display: flex; align-items: center; font-size:16px;">
        <i class="fas fa-chevron-left"></i>
        <span style="margin-left: 5px;">Regresar a vista del producto</span>
    </a>
    
</header>

<h1 class="mt-5 mb-4">Editar Nuevo Producto</h1>
<form action="{{route('productos.update', $producto)}}" method="POST">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del Producto</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre',$producto->nombre)}}" >
        @error('nombre')
            <span class="text-error">*{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug del Producto</label>
        <input type="text" class="form-control" id="slug" name="slug" value="{{old('slug', $producto->slug)}}" >
        @error('slug')
            <span class="text-error">*{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción del Producto</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" >{{old('descripcion',$producto->descripcion)}}</textarea>
        @error('descripcion')
            <span class="text-error">*{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="categoria" class="form-label">Categoría</label>
        <select class="form-select" id="categoria" name="categoria" >
            <option disabled>Seleccionar categoría</option>
            <option value="Edredones" {{ old('categoria', $producto->categoria) === 'Edredones' ? 'selected' : '' }}>Edredones</option>
            <option value="Colchas" {{ old('categoria', $producto->categoria) === 'Colchas' ? 'selected' : '' }}>Colchas</option>
            <option value="Sabanas" {{ old('categoria', $producto->categoria) === 'Sabanas' ? 'selected' : '' }}>Sabanas</option>
            <option value="Cortinas" {{ old('categoria', $producto->categoria) === 'Cortinas' ? 'selected' : '' }}>Cortinas</option>
            <option value="Toallas" {{ old('categoria', $producto->categoria) === 'Toallas' ? 'selected' : '' }}>Toallas</option>
        </select>
        @error('categoria')
            <span class="text-error">*{{ $message }}</span>
        @enderror
    </div>
    
    <div class="mb-3">
        <label for="medida" class="form-label">Medida del Producto</label>
        <select class="form-select" id="medida" name="medida" >
            <option disabled>Seleccionar Medida</option>
            <option value="King" {{ old('medida', $producto->medida) === 'King' ? 'selected' : '' }}>King</option>
            <option value="Queen" {{ old('medida', $producto->medida) === 'Queen' ? 'selected' : '' }}>Queen</option>
            <option value="Doble" {{ old('medida', $producto->medida) === 'Doble' ? 'selected' : '' }}>Doble</option>
            <option value="Semidoble" {{ old('medida', $producto->medida) === 'Semidoble' ? 'selected' : '' }}>Semidoble</option>
        </select>
        @error('medida')
            <span class="text-error">*{{ $message }}</span>
        @enderror
    </div>
    
    
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="number" class="form-control" id="precio" name="precio" value="{{old('precio',$producto->precio)}}" >
        @error('precio')
            <span class="text-error">*{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="number" class="form-control" id="stock" name="stock" value="{{old('stock',$producto->stock)}}" >
        @error('stock')
            <span class="text-error">*{{ $message }}</span>
        @enderror
    </div>
    <button type="submit" class="btn btn-principal">Actualizar Producto</button>
</form>

@endsection
