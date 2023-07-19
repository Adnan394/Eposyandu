@extends('layouts/app')
@section('title')
<div class="container">
    <h1>Data Vaksin</h1>
</div>
@endsection
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <p class="text-muted">Data Beberapa Vaksin yang tersedia</p>
            <button type="button" class="btn btn-main mb-3" data-bs-toggle="modal" data-bs-target="#addVaksin">
                Tambah Data Vaksin
            </button>
        </div>
        <livewire:modal.add-vaksin />
            <table class="table table-striped">
                <thead class="bg-dark">
                <tr>
                    <th scope="col" class="text-white">No</th>
                    <th scope="col" class="text-white">Nama</th>
                    <th scope="col" class="text-white"></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <th scope="row" >{{ $loop->iteration }}</th>
                            <td>{{ $item->nama_vaksin }}</td>
                            <td class="d-flex justify-content-end gap-3">
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editVaksin{{ $item->id }}">Edit</button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteVaksin">Hapus</button>

                                <!-- Modal -->
                                <div class="modal fade" id="editVaksin{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Vaksin</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <form action="{{ route('vaksin.update', $item->id) }}" method="post">
                                            @method('PUT')
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nama Vaksin</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" name="vaksin" placeholder="Masukan Nama Vaksin" value="{{ $item->nama_vaksin }}" required>
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
                                <div class="modal fade" id="deleteVaksin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Apakah Yakin untuk menghapus?</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body p-5">
                                        <form action="{{ route('vaksin.destroy', $item->id) }}" method="post">
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