<footer class="footer bg-dark text-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo de HomeColor" class="img-fluid" style="max-height: 250px; height:100%;">
            </div>
            
            <div class="col-md-4">
                <h5>Contacto</h5>
                <p>Dirección: <a href="https://maps.app.goo.gl/9APi9v4QMEuxop7C6" target="_blank">Cra 12a#72a50, Cali - Valle</a></p>
                <p>Teléfono: <a href="tel:+573167753328">(+57) 3167753328</a></p>
                <p>Correo electrónico: <a href="mailto:homecolor11@gmail.com">homecolor11@gmail.com</a></p>
            </div>
            <div class="col-md-4">
                <h5>Sobre Nosotros</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('contactanos') }}">Contáctanos</a></li>
                    <li><a href="{{ route('preguntas_frecuentes') }}">Preguntas frecuentes</a></li>
                    <li><a href="{{ route('politica_datos') }}">Políticas de privacidad</a></li>
                    <li><a href="{{ route('terminos_condiciones') }}">Términos y Condiciones</a></li>
                </ul>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <a href="https://www.facebook.com/profile.php?id=100072524917471&mibextid=ZbWKwL" class="me-3" target="__blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/homecolor_hogar?igsh=NDhkejNmNW1nYjdz" class="me-3" target="__blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=573167753328" class="me-3" target="__blank"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <p class="text-center">© {{ date('Y') }} Homecolor. Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</footer>
