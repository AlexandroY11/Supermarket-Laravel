<nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-dark bg-dark border-bottom box-shadow mb-3" style="max-height:100px; height:100%;">
    <div class="container">
        <a href="{{ route('home') }}">
            <img src="{{ asset('assets/img/icon.png') }}" alt="Supermarket Icon" style="max-height: 75px;" />
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
                    <a class="nav-link active" href="{{ route('productos') }}">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('categorias') }}">Categorías</a>
                </li>
            </ul>
            <div class="d-flex">
                <a class="btn btn-primary me-2" href="{{ route('registro') }}">Registrarse</a>
                <a class="btn btn-success" href="{{ route('login') }}">Iniciar Sesión</a>
            </div>            
        </div>
    </div>
</nav>