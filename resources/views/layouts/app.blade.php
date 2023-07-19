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
    :root {
    --header-height: 3rem;
    --nav-width: 68px;
    --first-color: #4723d9;
    --first-color-light: #afa5d9;
    --white-color: #f7f6fb;
    --body-font: "Nunito", sans-serif;
    --normal-font-size: 1rem;
    --z-fixed: 100;
  }
  *,
  ::before,
  ::after {
      box-sizing: border-box;
  }
  body {
      position: relative;
      margin: var(--header-height) 0 0 0;
      padding: 0 1rem;
      font-family: var(--body-font);
      font-size: var(--normal-font-size);
      transition: 0.5s;
  }
  a {
      text-decoration: none;
  }
  .header {
      width: 100%;
      height: var(--header-height);
      position: fixed;
      top: 0;
      left: 0;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 1rem;
      background-color: var(--white-color);
      z-index: var(--z-fixed);
      transition: 0.5s;
  }
  .header_toggle {
      color: var(--first-color);
      font-size: 1.5rem;
      cursor: pointer;
  }
  .header_img {
      width: 35px;
      height: 35px;
      display: flex;
      justify-content: center;
      border-radius: 50%;
      overflow: hidden;
  }
  .header_img img {
      width: 40px;
  }
  .l-navbar {
      position: fixed;
      top: 0;
      left: -30%;
      width: var(--nav-width);
      height: 100vh;
      background-color: var(--first-color);
      padding: 0.5rem 1rem 0 0;
      transition: 0.5s;
      z-index: var(--z-fixed);
  }
  .nav {
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      overflow: hidden;
  }
  .nav_logo,
  .nav_link {
      display: grid;
      grid-template-columns: max-content max-content;
      align-items: center;
      column-gap: 1rem;
      padding: 0.5rem 0 0.5rem 1.5rem;
  }
  .nav_logo {
      margin-bottom: 2rem;
  }
  .nav_logo-icon {
      font-size: 1.25rem;
      color: var(--white-color);
  }
  .nav_logo-name {
      color: var(--white-color);
      font-weight: 700;
  }
  .nav_link {
      position: relative;
      color: var(--first-color-light);
      margin-bottom: 1.5rem;
      transition: 0.3s;
  }
  .nav_link:hover {
      color: var(--white-color);
  }
  .nav_icon {
      font-size: 1.25rem;
  }
  .show {
      left: 0;
  }
  .body-pd {
      padding-left: calc(var(--nav-width) + 1rem);
  }
  .active {
      color: var(--white-color);
  }
  .active::before {
      content: "";
      position: absolute;
      left: 0;
      width: 2px;
      height: 32px;
      background-color: var(--white-color);
  }
  .height-100 {
      height: 100vh;
  }
  @media screen and (min-width: 768px) {
      body {
          margin: calc(var(--header-height) + 1rem) 0 0 0;
          padding-left: calc(var(--nav-width) + 2rem);
      }
      .header {
          height: calc(var(--header-height) + 1rem);
          padding: 0 2rem 0 calc(var(--nav-width) + 2rem);
      }
      .header_img {
          width: 40px;
          height: 40px;
      }
      .header_img img {
          width: 45px;
      }
      .l-navbar {
          left: 0;
          padding: 1rem 1rem 0 0;
      }
      .show {
          width: calc(var(--nav-width) + 156px);
      }
      .body-pd {
          padding-left: calc(var(--nav-width) + 188px);
      }
  }

    /* Sidebar */
    .sidebar {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      z-index: 100;
      
      overflow-x: hidden;
      /* overflow-y: auto; */
      background-color: #f8f9fa;
      border-right: 1px solid #dee2e6;
    }

    /* Sidebar Menu */
    .nav-link {
      color: #fff;
      font-weight: 500;
      border-radius: 5px;
    }

    .nav-link:hover {
        background: rgb(37, 160, 190);
        color: #fff;
    }

    /* Active Menu Item */
    .active {
        background: rgb(25, 180, 84);
        color: #fff;
    }

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

    /* Content */
    main {
      margin-left: 140px;
      padding: 20px;
    }
  </style>
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
          <!-- Sidebar -->
          <aside class="col-md-3 col-lg-2 sidebar bg-main">
            <ul class="nav flex-column justify-content-start ">
              <li class="nav-item mb-3 d-block my-auto mt-3 p-3 bg-white">
                <img src="{{ asset('assets/image/Logo.png') }}" alt="" width="50px">
                <strong class="text-dark">E-Posyandu</strong>
              </li>
              <!-- Menu Item 1 -->
              <li class="nav-item" data-bs-toggle="collapse" data-bs-target="#collapseExample">
                <a class="nav-link" style="cursor: pointer">
                  <i class="bi bi-people"></i> User <i class="bi bi-chevron-down ms-5 ps-3"></i>
                </a>
              </li>
              <div class="collapse ms-3" id="collapseExample">
              <!-- Menu Item 1 -->
              <li class="nav-item">
                <a class="nav-link" href="{{ route('petugas.index') }}">
                  <i class="bi bi-people"></i> Petugas
                </a>
              </li>
    
              <!-- Menu Item 2 -->
              <li class="nav-item">
                <a class="nav-link" href="{{ route('anak.index') }}">
                  <i class="bi bi-people"></i> Anak
                </a>
              </li>
              <!-- Menu Item 2 -->
              <li class="nav-item">
                <a class="nav-link" href="{{ route('ibu.index') }}">
                  <i class="bi bi-people"></i> Ibu
                </a>
              </li>
            </div>
              <!-- Menu Item 2 -->
              <li class="nav-item">
                <a class="nav-link" href="{{ route('posyandu.index') }}">
                  <i class="bi bi-hospital"></i> Posyandu
                </a>
              </li>
              <!-- Menu Item 2 -->
              <li class="nav-item">
                <a class="nav-link" href="{{ route('imunisasi.index') }}">
                  <i class="bi bi-capsule-pill"></i> Imunisasi
                </a>
              </li>
              <!-- Menu Item 2 -->
              <li class="nav-item">
                <a class="nav-link" href="{{ route('vaksin.index') }}">
                  <i class="bi bi-virus2"></i> Vaksin
                </a>
              </li>
            </ul>
          </aside>
    
          <!-- Content -->
          
        </div>
    </div>
    <div id="app">
        <main class="py-4">
            @yield('title')
            @yield('content')
        </main>
    </div>
        <!-- Bootstrap Bundle with Popper.js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Font Awesome Icons -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script> 
</body>
</html>
