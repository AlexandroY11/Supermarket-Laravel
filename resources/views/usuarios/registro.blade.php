@extends('layouts.form_registro')

@section('title', 'Registrarse')

@section('body')

<form method="post" action="">
    <div class="mb-3 d-flex align-items-center">
        <img src="{{ asset('assets/img/logo.png') }}" alt="Homecolor" class="img-fluid me-3" style="max-height: 100px;">
        <span class="h2">Crear Cuenta</span>
    </div>
    
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombres</label>
        <input type="text" class="form-control" id="nombre" aria-describedby="nombre" required>
        <div>
            <span class="text-danger"></span>
        </div>
    </div>
    <div class="mb-3">
        <label for="apellidos" class="form-label">Apellidos</label>
        <input type="text" class="form-control" id="apellidos" aria-describedby="apellidos" required>
        <div>
            <span class="text-danger"></span>
        </div>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" id="email" aria-describedby="email">
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
        <label for="password" class="form-label">Confirmar Contraseña</label>
        <input type="password" class="form-control" id="password" required>
        <div>
            <span class="text-danger"></span>
        </div>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="terminos" required>
        <label class="form-check-label" for="terminos">Acepto los <a href="{{ route('terminos_condiciones') }}" target="_blank">términos y condiciones</a></label>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-principal w-100">Registrarse</button>
    </div>
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <span>¿Ya tienes una cuenta?</span>
        <a href="{{ route('usuarios.login') }}" class="btn btn-secundario">Iniciar sesión</a>
    </div>
</form>
        
@endsection
