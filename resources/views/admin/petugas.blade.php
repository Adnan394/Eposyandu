@extends('layouts/app')
@section('title')
<div class="container">
    <h1>Data Petugas</h1>
</div>
@endsection
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <p class="text-muted">Data Petugas yang Bekerja</p>
            <button type="button" class="btn btn-main mb-3" data-bs-toggle="modal" data-bs-target="#addPetugas">
                Tambah Data Petugas
            </button>
        </div>
        <livewire:modal.add-petugas />
            <table class="table table-striped">
                <thead class="bg-dark">
                <tr>
                    <th scope="col" class="text-white">No</th>
                    <th scope="col" class="text-white">Nama</th>
                    <th scope="col" class="text-white">Jabatan</th>
                    <th scope="col" class="text-white">Kelamin</th>
                    <th scope="col" class="text-white">TTL</th>
                    <th scope="col" class="text-white">Alamat</th>
                    <th scope="col" class="text-white">No Telepon</th>
                    <th scope="col" class="text-white">Image</th>
                    <th scope="col" class="text-white">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <th scope="row" >{{ $loop->iteration }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->jabatan }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>{{ $item->tempat_lahir }}, {{ $item->tanggal_lahir }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->no_telp }}</td>
                            <td>
                                <img src="{{ Storage::url($item->image) }}" alt="" width="50px">
                            </td>
                            <td>
                                <div class="d-flex justify-content-end gap-3">
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editPetugas{{ $item->id }}">Edit</button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletePetugas">Hapus</button>
                                </div>
                                <!-- Modal edit -->
                                <div class="modal fade" id="editPetugas{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Petugas</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <form action="{{ route('petugas.update', $item->id) }}" method="post" enctype="multipart/form-data">
                                            @method('PUT')
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Masukan Nama Vaksin" value="{{ $item->name }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" name="jabatan" placeholder="Masukan Jabatan" value="{{ $item->jabatan }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Kelamin</label>
                                                <select class="form-select" aria-label="Default select example" name="jenis_kelamin" id="exampleFormControlInput1"  required>
                                                    <option value="{{ $item->name }}" selected>{{ $item->jenis_kelamin == "L" ? "Laki laki" : "Perempuan" }}</option>
                                                    <option value="L">Laki laki</option>
                                                    <option value="P">perempuan</option>
                                                </select>
                                            </div>
                                            <div class="d-flex gap-3">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="tempat_lahir" placeholder="Masukan Jabatan" value="{{ $item->tempat_lahir }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" id="exampleFormControlInput1" name="tanggal_lahir" placeholder="Tempat Lahir" value="{{ $item->tanggal_lahir }}" required>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" name="alamat" placeholder="Masukan Alamat" value="{{ $item->alamat }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">No Telepon</label>
                                                <input type="number" class="form-control" id="exampleFormControlInput1" name="no_telp" placeholder="Masukan No Telepon" value="{{ $item->no_telp }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Image</label>
                                                <input type="file" class="form-control" id="exampleFormControlInput1" name="image" required>
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
                                        <form action="{{ route('petugas.destroy', $item->id) }}" method="post">
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