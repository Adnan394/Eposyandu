@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row mb-5 pb-5">
            <div class="col d-none d-md-block">
                <img src="{{ asset('assets/image/landingpage.png') }}" alt="" width="100%">
            </div>
            <div class="col col-sm-12 col-md-6 mt-5">
                <div class="">
                    <h2 style="font-weight: 700">Wujudkan Keluarga Indonesia sebagai Keluarga idaman yang sehat dan sejahtera</h2>
                    <p>Posyandu memberikan layanan keluarga terbaik dengan memberdayakan potensi masyarakat dalam upaya mengurangi dan mengatasi masalah sosial yang ada di Indonesia.</p>
                    <a href="#layanan"><button type="button" class="btn btn-main">Layanan Kami</button></a>
                </div>
            </div>
        </div>

        <h2 style="font-weight: 700" class="text-center" id="layanan">Layanan</h2>
        <div class="layanan  py-4 mb-5" >
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="{{ route('anak.create') }}" style="text-decoration:none;" class="text-dark">
                    <div class="bg-white shadow-sm px-5 py-4 rounded d-flex flex-column align-items-center gap-3" style="width:200px;">
                        <img src="{{ asset('assets/image/anak.png') }}" alt="" width="50px" class="center"> 
                        <h5 class="text-center">Masukan Data Anak</h5>
                    </div>
                </a>
                <a href="{{ route('imunisasi.create') }}" style="text-decoration:none;" class="text-dark">
                    <div class="bg-white shadow-sm px-5 py-4 rounded d-flex flex-column align-items-center gap-3" style="width:200px;">
                        <img src="{{ asset('assets/image/imun.png') }}" alt="" width="50px"> 
                        <h5 class="text-center">Imunisasi Anak</h5>
                    </div>
                </a>
                <a href="{{ route('data-posyandu') }}" style="text-decoration:none;" class="text-dark">
                    <div class="bg-white shadow-sm px-5 py-4 rounded d-flex flex-column align-items-center gap-3" style="width:200px;">
                        <img src="{{ asset('assets/image/posyandu.png') }}" alt="" width="50px" class="center"> 
                        <h5 class="text-center">Data Posyandu</h5>
                    </div>
                </a>
                <a href="{{ route('data-petugas') }}" style="text-decoration:none;" class="text-dark">
                    <div class="bg-white shadow-sm px-5 py-4 rounded d-flex flex-column align-items-center gap-3" style="width:200px;">
                        <img src="{{ asset('assets/image/petugas.png') }}" alt="" width="50px" class="center"> 
                        <h5 class="text-center">Data Petugas</h5>
                    </div>
                </a>
                <a href="{{ route('data-vaksin') }}" style="text-decoration:none;" class="text-dark">
                    <div class="bg-white shadow-sm px-5 py-4 rounded d-flex flex-column align-items-center gap-3" style="width:200px;">
                        <img src="{{ asset('assets/image/vaksin.png') }}" alt="" width="50px" class="center"> 
                        <h5 class="text-center">Data Vaksin</h5>
                    </div>
                </a>
            </div>
        </div>

        <div class="tentang px-5" id="tentang">
            <h2 style="font-weight: 700" class="text-center">Tentang Kami</h2>
            <div class="row">
                <div class="col col-md-4 col-sm-12 d-flex justify-content-center">
                    <img src="{{ asset('assets/image/Logo.png') }}" alt="" width="300px">
                </div>
                <div class="col col-md-8 col-sm-12 d-flex align-items-center">
                    <p>
                        Posyandu (Pos Pelayanan Terpadu) merupakan salah satu bentuk Upaya Kesehatan Bersumberdaya Masyarakat (UKBM) yang dilaksanakan oleh, dari dan bersama masyarakat, untuk memberdayakan dan memberikan kemudahan kepada masyarakat guna memperoleh pelayanan kesehatan bagi ibu, bayi dan anak balita.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection