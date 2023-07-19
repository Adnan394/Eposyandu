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
                  <div class="dropdown dropstart">
                    @php
                        $badge = App\Models\Ibu::where('akun_id', Auth::user()->id)->first();
                        $pengaturan = App\Models\Ibu::where('akun_id', Auth::user()->id)->first();
                    @endphp
                    @if ($badge)
                    <a class="nav-link" href="#" class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Profile </a>
                    @else
                    <a class="nav-link" href="#" class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Profile <span class="badge text-bg-danger">Lengkapi</span></a>
                    @endif
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#profile">Profile</a></li>
                      @if ($pengaturan)
                      <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                      @else
                      <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#pengaturan">Pengaturan</a></li>
                      @endif
                      <li><a class="dropdown-item" href="{{ route('anak.index') }}">Data Anak</a></li>
                      <li><a class="dropdown-item" href="{{ route('imunisasi.index') }}">Riwayat Imunisasi</a></li>
                      <hr>
                      <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                  </div>
                  <livewire:modal.profile />
                  <livewire:modal.pengaturan />
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
                <div class="col">
                    <h5 style="font-weight: 600">Manfaat Imunisasi</h5>
                    <p> membentuk kekebalan tubuh agar tidak mudah terinfeksi virus penyebab penyakit. Pemberian imunisasi pada bayi menjadi hal yang penting, sebab tubuh bayi memiliki tingkat imunitas yang rendah sehingga harus segera mendapatkan perlindungan dari infeksi penyakit menular.</p>
                </div>
                <div class="col">
                    <h5 style="font-weight: 600">Contact</h5>
                    <p>WhatsApp : (+62) 937 1237 9812</p>
                    <p>Email    : Example@email.com</p>
                </div>
                <div class="col">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63301.06345446958!2d109.19322357052869!3d-7.43018888781828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655c3136423d1d%3A0x4027a76e352e4a0!2sPurwokerto%2C%20Kabupaten%20Banyumas%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1689797612103!5m2!1sid!2sid" width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </footer>
        <!-- Bootstrap Bundle with Popper.js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Font Awesome Icons -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script> 
</body>
</html>
