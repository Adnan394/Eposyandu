@extends('layouts/app')
@section('title')
<div class="container">
    <h1>Data Posyandu</h1>
</div>
@endsection
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <p class="text-muted">Data Posyandu Tersedia</p>
            <button type="button" class="btn btn-main mb-3" data-bs-toggle="modal" data-bs-target="#addPosyandu">
                Tambah Data Posyandu
            </button>
        </div>
        <livewire:modal.add-posyandu />
            <table class="table table-striped">
                <thead class="bg-dark color-white">
                <tr>
                    <th scope="col" class="text-white">No</th>
                    <th scope="col" class="text-white">Nama</th>
                    <th scope="col" class="text-white">Alamat</th>
                    <th scope="col" class="text-white">Kelurahan</th>
                    <th scope="col" class="text-white">Kecamatan</th>
                    <th scope="col" class="text-white">Kabupaten / Kota</th>
                    <th scope="col" class="text-white">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <th scope="row" >{{ $loop->iteration }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->kalurahan }}</td>
                            <td>{{ $item->kecamatan }}</td>
                            <td>{{ $item->kabupaten }}</td>
                            <td>
                                <div class="d-flex justify-content-end gap-3">
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editPosyandu{{ $item->id }}">Edit</button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletePetugas">Hapus</button>
                                </div>
                                <!-- Modal edit -->
                                <div class="modal fade" id="editPosyandu{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Posyandu</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <form action="{{ route('posyandu.update', $item->id) }}" method="post" enctype="multipart/form-data">
                                            @method('PUT')
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Masukan Nama Posyandu" value="{{ $item->name }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" name="alamat" placeholder="Masukan Alamat" value="{{ $item->alamat }}" required>
                                            </div>
                                            <div class="d-flex gap-3">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Kelurahan</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="kelurahan" placeholder="Masukan Kelurahan" value="{{ $item->kalurahan }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Kecamatan</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="kecamatan" placeholder="Masukan Kecamatan" value="{{ $item->kecamatan }}" required>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Kabupaten / Kota</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" name="kabupaten" placeholder="Masukan Kabupaten / Kota" value="{{ $item->kabupaten }}" required>
                                            </div>
                                        </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                    </div>
                                </div>

                                <!-- Modal delete-->
                                <div class="modal fade" id="deletePetugas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Apakah Yakin untuk menghapus?</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body p-5">
                                        <form action="{{ route('posyandu.destroy', $item->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <img src="{{ asset('assets/image/warning.png') }}" alt="" width="200px" class="d-block m-auto">
                                        </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Lanjut</button>
                                            </div>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        {{ $data->links() }}
    </div>
@endsection