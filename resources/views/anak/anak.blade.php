@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 d-block mx-auto">
                <div class="card my-5 pt-3">
                    <div class="d-block m-auto">
                        <img src="{{ asset('assets/image/anak.png') }}" alt="" width="50px">
                    </div>
                    <div class="card-body">
                    <h5 style="font-weight: 600" class="text-center">Tambah Data Anak</h5>
                        <form action="{{ route('anak.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Masukan Nama Anak" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="nik" placeholder="Masukan NIK" required>
                            </div>
                            <div class="d-flex gap-3">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="tempat_lahir" placeholder="Tempat Lahir" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="exampleFormControlInput1" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
                            </div>
                            </div>
                            <div class="d-flex gap-3">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Kelamin</label>
                                    <select class="form-select" aria-label="Default select example" name="jenis_kelamin" id="exampleFormControlInput1" required>
                                        <option selected>jenis kelamin</option>
                                        <option value="L">Laki - Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Usia</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" name="usia" placeholder="Masukan Usia" required>
                                    <input type="hidden" name="id_ibu" value="{{ Auth::user()->id }}">
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <button type="submit" class="btn btn-main">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection