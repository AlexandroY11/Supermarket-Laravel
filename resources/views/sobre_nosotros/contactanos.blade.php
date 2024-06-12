@extends('layouts.plantilla')

@section('title', 'Contáctanos')

@section('body')

<div class="container">
    <h1 class="mt-5 mb-4">Contáctanos</h1>

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

    <div class="row">
        <div class="col-md-6">
            <div class="contact-info">
                <h2 class="section-title">Información de Contacto</h2>
                <ul>
                    <li><strong>Dirección:</strong> Cra 12a#72a50 Barrio Siete de Agosto, Cali - Valle</li>
                    <li><strong>Teléfono:</strong> (+57) 3167753328</li>
                    <li><strong>Correo electrónico:</strong> <a href="mailto:homecolor11@gmail.com">homecolor11@gmail.com</a></li>
                </ul>
            </div>
            
            <div class="location-map mt-5">
                <h2 class="section-title">Ubicación</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d418.6190984165941!2d-76.48574944336426!3d3.4473890977713153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1711050724220" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="col-md-6">
            <div class="contact-form" style="height: 100%;">
                <h2 class="section-title">Envíanos un Mensaje</h2>
                <form id="contactForm" action="{{route('contactanos.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}" required>
                        @error('nombre')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control @error('telefono') is-invalid @enderror" id="telefono" name="telefono" placeholder="Teléfono" value="{{ old('telefono') }}" required>
                        @error('telefono')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Correo Electrónico" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <select type="producto" class="form-select @error('producto') is-invalid @enderror" id="producto" name="producto" placeholder="Producto de interés" required>
                            <option value="" selected disabled>Elegir opción...</option>
                            @foreach ($productos as $producto)
                                <option value="{{ $producto->nombre }}" {{ old('producto') == $producto->nombre ? 'selected' : '' }}>{{ $producto->nombre }}</option>
                            @endforeach
                        </select>
                        @error('producto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control @error('mensaje') is-invalid @enderror" id="mensaje" name="mensaje" rows="5" placeholder="Mensaje" required>{{ old('mensaje') }}</textarea>
                        @error('mensaje')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    @if($errors->any())
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('contactForm').scrollIntoView();
        });
    @endif  
</script>

@endsection
