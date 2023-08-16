<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Servicios de laboratorio</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
        <style>
            body{
                background: url({{asset('images/departamentos.jpeg')}});
            }
        </style>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- script -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"defer></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container">
                <a class="navbar-brand text-white" href="/"> 
                    <img src="https://www.champoton.tecnm.mx/ITS_Champoton/images/headers/2_iteschamSmall.png" alt="Logo" width="100" height="30" class="d-inline-block align-text-top">
                    <strong>Servicios de laboratorio</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        @if (Route::has('login'))
                            @auth
                            <li class="nav-item">
                                <a class="nav-link text-white btn-outline-secondary" href="{{url('/home')}}">Home</a>
                            </li>
                            @else
                            <li class="nav-item ">
                                <a class="nav-link text-white btn-outline-secondary" href="{{route('login')}}">Inicio de sesión</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item ">
                                <a class="nav-link text-white btn-outline-secondary" href="{{route('register')}}">Registrate</a>
                            </li>
                            @endif
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>

