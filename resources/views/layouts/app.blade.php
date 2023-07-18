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
        background: rgb(25, 180, 84);
        color: #fff;
    }

    /* Active Menu Item */
    .active {
        background: rgb(25, 180, 84);
        color: #fff;
    }

    /* Content */
    main {
      margin-left: 140px;
      padding: 20px;
    }
  </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
          <!-- Sidebar -->
          <aside class="col-md-3 col-lg-2 sidebar bg-success">
            <ul class="nav flex-column justify-content-start">
              <li class="nav-item mb-3 border-bottom border-sm pb-3 mt-3">
                <a class="nav-link " href="" >
                  Menu 1
                </a>
              </li>
              <!-- Menu Item 1 -->
              <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="fas fa-home me-2"></i>
                  Menu 1
                </a>
              </li>
    
              <!-- Menu Item 2 -->
              <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="fas fa-cogs me-2"></i>
                  Menu 2
                </a>
              </li>
              <!-- Menu Item 2 -->
              <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="fas fa-cogs me-2"></i>
                  Menu 2
                </a>
              </li>
            </ul>
          </aside>
    
          <!-- Content -->
          
        </div>
    </div>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
        <!-- Bootstrap Bundle with Popper.js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Font Awesome Icons -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script> 
</body>
</html>
