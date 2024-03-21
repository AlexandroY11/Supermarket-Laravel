@extends('layouts.plantilla')

@section('title', 'Contáctanos')

@section('body')

    <div class="container">
        <h1 class="mt-5 mb-4">Contáctanos</h1>

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
                
                <div class="contact-form mt-5">
                    <h2 class="section-title">Envíanos un Mensaje</h2>
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="5" placeholder="Mensaje" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="location-map">
                    <h2 class="section-title">Ubicación</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d418.6190984165941!2d-76.48574944336426!3d3.4473890977713153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1711050724220" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
