<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link rel="prefetch" href="{{ asset('assets/img/icon.png') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-p3f2cJw8t/OxQu5Ez42jf+qObABkmXzeTPBrS3W16L+GPw3q29adIU3ymjUY4DOBDGtNcnALeDyCKUHqlQ7b4w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>@yield('title')</title>
</head>
<body>
    <div class="container-fluid">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6 login">
                    <header>
                        <a href="{{route('home')}}">
                            <span>Regresar a Inicio</span>
                        </a>
                    </header>
                    @yield('body')
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var input = document.querySelector('input');
            if (input) {
                input.focus();
            }
        });
    </script>
</body>
</html>