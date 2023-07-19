<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    .bg-main {
      background-color: #0c94b4;
      color: #fff;
    }
    .btn-main {
      background-color: #0c94b4;
      color: #fff;
    }
    .btn-main:hover {
      background-color: #0e7f99;
      color: #fff;
    }
  </style>
</head>
<body class="bg-light">
    {{-- navbar  --}}

    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
          <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/image/Logo.png') }}" alt="" width="70px">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav" style="font-weight:500">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#layanan">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#tentang">Tentang Kami</a>
              </li>
              <li class="nav-item">
                  <div class="dropdown">
                    <a class="nav-link" href="#" class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Profile <span class="badge text-bg-danger">Lengkapi</span></a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Profile</a></li>
                      <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                    </ul>
                  </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer class="bg-main py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, odit sed voluptatibus necessitatibus itaque dolor optio voluptas magni nisi officiis.</div>
                <div class="col">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, odit sed voluptatibus necessitatibus itaque dolor optio voluptas magni nisi officiis.</div>
                <div class="col">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, odit sed voluptatibus necessitatibus itaque dolor optio voluptas magni nisi officiis.</div>
            </div>
        </div>
    </footer>
        <!-- Bootstrap Bundle with Popper.js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Font Awesome Icons -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script> 
</body>
</html>
