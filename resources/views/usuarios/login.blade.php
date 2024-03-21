@extends('layouts.form_registro')

@section('title', 'Iniciar Sesión')

@section('body')

<form method="post" action="">
    <div class="mb-3 d-flex align-items-center">
        <img src="{{ asset('assets/img/logo.png') }}" alt="XYZ Supermarket" class="img-fluid me-3" style="max-height: 100px;">
        <span class="h2">Iniciar Sesión</span>
    </div>
    
    <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" id="email" aria-describedby="email" required>
        <div>
            <span class="text-danger"></span>
        </div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" required>
        <div>
            <span class="text-danger"></span>
        </div>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-custom w-100">Iniciar Sesión</button>
    </div>
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <span>¿Necesita una cuenta?</span>
        <a href="{{ route('registro') }}" class="btn btn-warning">Crear Cuenta</a>
    </div>
</form>
        
@endsection
