@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 d-block mx-auto">
                <div class="card my-5 pt-3">
                    <div class="d-block m-auto">
                        <img src="{{ asset('assets/image/imun.png') }}" alt="" width="50px">
                    </div>
                    <div class="card-body">
                    <h5 style="font-weight: 600" class="text-center">Tambah Data Imunisasi</h5>
                    @php
                        $anak = App\Models\Anak::where('id_ibu', Auth::user()->id)->first();
                        $vaksin = App\Models\Vaksin::all();
                        $petugas = App\Models\Petugas::all();
                    @endphp
                        <form action="{{ route('imunisasi.store') }}" method="POST">
                            @csrf
                            <div class="d-flex gap-3">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Usia</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="usia_saat_vaksin" value="{{ $anak->usia }}"  required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Berat badan</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" name="berat_badan" placeholder="Masukan Berat badan (cm)" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Tinggi Badan</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" name="tinggi_badan" placeholder="Masukan Tinggi badan (kg)" required>
                                </div>
                            </div>
                            <div class="d-flex gap-3">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Periode</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" name="periode" placeholder="Masukan Periode Imunisasi" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Tanggal Imunisasi</label>
                                    <input type="date" class="form-control" id="exampleFormControlInput1" name="tanggal_imunisasi" placeholder="Masukan Tanggal Imunisasi" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Vaksin</label>
                                <select class="form-select" aria-label="Default select example" name="id_vaksin" id="exampleFormControlInput1" required>
                                    <option selected>Jenis Vaksin</option>
                                    @foreach ($vaksin as $v)
                                    <option value="{{ $v->id }}">{{ $v->nama_vaksin }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Petugas</label>
                                <select class="form-select" aria-label="Default select example" name="id_petugas" id="exampleFormControlInput1" required>
                                    <option selected>Petugas</option>
                                    @foreach ($petugas as $p)
                                    <option value="{{ $p->id }}">{{ $p->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" name="id_ibu" value="{{ Auth::user()->id }}">
                            <input type="hidden" class="form-control" id="exampleFormControlInput1" name="id_anak" value="{{ $anak->id }}"  required>
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