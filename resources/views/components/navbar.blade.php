<nav class="navbar navbar-expand-sm navbar-dark bg-dark border-bottom box-shadow mb-3" >
    <div class="container">
        <a href="{{ route('home') }}">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Homecolor Icon" style="max-height: 75px;" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('productos.index') }}">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('categorias.index') }}">Categorías</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sobre Nosotros
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('quienes_somos') }}">¿Quiénes Somos?</a></li>
                        <li><a class="dropdown-item" href="{{ route('pqrs') }}">PQRS</a></li>
                        <li><a class="dropdown-item" href="{{ route('contactanos') }}">Contáctanos</a></li>
                        <li><a class="dropdown-item" href="{{ route('preguntas_frecuentes') }}">Preguntas Frecuentes</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('politica_datos') }}">Pólitica tratamiento de datos</a></li>
                        <li><a class="dropdown-item" href="{{ route('terminos_condiciones') }}">Términos y Condiciones</a></li>
                    </ul>
                </li>
            </ul>
            <div class="d-flex">
                <a class="btn btn-principal" href="{{ route('usuarios.login') }}">Iniciar Sesión</a>
            </div>            
        </div>
    </div>
</nav>
