@extends('layouts.form_registro')

@section('title', 'Registrarse')

@section('body')

<form method="post" action="">
    <div class="mb-3 d-flex align-items-center">
        <img src="{{ asset('assets/img/icon.png') }}" alt="XYZ Supermarket" class="img-fluid me-3" style="max-height: 100px;">
        <span class="h2">Crear Cuenta</span>
    </div>
    
    <div class="mb-3">
        <label for="username" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" id="username" aria-describedby="username">
        <div>
            <span class="text-danger"></span>
        </div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password">
        <div>
            <span class="text-danger"></span>
        </div>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-custom w-100">Iniciar Sesión</button>
    </div>
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <span>¿Ya tienes una cuenta?</span>
        <a href="{{ route('login') }}" class="btn btn-warning">Iniciar sesión</a>
    </div>
</form>
        
@endsection
