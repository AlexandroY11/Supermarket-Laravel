@extends('layouts.form_registro')

@section('title', 'Iniciar Sesión')

@section('body')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 login">
            <form method="post" action="">
                <div class="mb-3 d-flex align-items-center">
                    <img src="{{ asset('assets/img/icon.png') }}" alt="XYZ Supermarket" class="img-fluid me-3" style="max-height: 100px;">
                    <span class="h2">Iniciar Sesión</span>
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
                    <span>¿Necesita una cuenta?</span>
                    <a href="{{ route('registro') }}" class="btn btn-warning">Crear Cuenta</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
