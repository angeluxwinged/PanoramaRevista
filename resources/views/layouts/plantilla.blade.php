<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('dist/css/panorama.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Patrick+Hand&family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>@yield('title')</title>
</head>
<body>
    <img class="banner img-fluid" src="{{ asset('dist/images/banner.png')}}">
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mx-auto mb-2 mb-lg-0">

              <li class="nav-item">
                <a class="" aria-current="page" href="{{route('actual')}}">
                  <div class="nav-icons {{request()->routeIs('actual') ? 'active' : ''}}">
                    <img src="{{ asset('dist/images/actual.png') }}">
                    <p><span style="color: rgb(145,216,246)">P</span>anorama Actual</p>
                  </div>
                </a>
              </li>

              <li class="nav-item">
                <a class="" aria-current="page" href="{{route('archivo')}}">
                  <div class="nav-icons {{request()->routeIs('archivo') ? 'active' : ''}}">
                    <img src="{{ asset('dist/images/archivo.png') }}">
                    <p>Archivo</p>
                  </div>
                </a>
              </li>

                <li class="nav-item">
                  <a class="" aria-current="page" href="{{route('consejo')}}">
                    <div class="nav-icons {{request()->routeIs('consejo') ? 'active' : ''}}">
                      <img src="{{ asset('dist/images/consejo.png') }}">
                      <p>Consejo Editorial</p>
                    </div>
                  </a>
                </li>
              

                <li class="nav-item">
                  <a class="" aria-current="page" href="{{route('colaboradores')}}">
                    <div class="nav-icons {{request()->routeIs('colaboradores') ? 'active' : ''}}">
                      <img src="{{ asset('dist/images/colaboradores.png') }}">
                      <p>Colaboradores</p>
                    </div>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="" aria-current="page" href="{{route('estadisticas')}}">
                    <div class="nav-icons {{request()->routeIs('estadisticas') ? 'active' : ''}}">
                      <img src="{{ asset('dist/images/estadisticas.png') }}">
                      <p>Estadísticas</p>
                    </div>
                  </a>
                </li>

            </ul>
          </div>
        </div>
      </nav>

    @yield('content')
</body>
</html>