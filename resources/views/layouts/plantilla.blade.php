<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    {{-- Estilos personalizados --}}
    <link href="{{ asset('css/components.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- TAILWIND --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

    <title>Homecolor || @yield('title')</title>
</head>
<body>
    @include('components.navbar')
    <div class="container-fluid" id="div-principal">
        <div class="container">
            <!-- Agregar SweetAlert CSS y JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
            @yield('body')
        </div>
    </div>
    
    {{-- Botones flotantes --}}

    <div class="social-button" id="whatsapp-button">
        <a href="https://api.whatsapp.com/send?phone=TUNUMERODEWHATSAPP" target="_blank" rel="noopener noreferrer">
            <img src="{{ asset('assets/img/whatsapp.png') }}" alt="Botón de WhatsApp">
        </a>
    </div>
    
    <div class="social-button" id="facebook-button">
        <a href="https://www.facebook.com/people/Homecolor-Art%C3%ADculos-para-el-hogar/100072524917471/?mibextid=ZbWKwLs" target="_blank" rel="noopener noreferrer">
            <img src="{{ asset('assets/img/facebook.png') }}" alt="Botón de Facebook">
        </a>
    </div>
    
    <div class="social-button" id="instagram-button">
        <a href="https://www.instagram.com/homecolor_hogar/?igsh=NDhkejNmNW1nYjdz" target="_blank" rel="noopener noreferrer">
            <img src="{{ asset('assets/img/instagram.png') }}" alt="Botón de Instagram">
        </a>
    </div>
    



    @include('components.footer')

    {{-- Scripts al final del cuerpo del documento --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
