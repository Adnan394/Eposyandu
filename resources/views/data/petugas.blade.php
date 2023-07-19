@extends('layouts/main')
@section('content')
    <div class="container">
        <div class="">
            <h1>Data Petugas</h1>
            <p class="text-muted">Data Petugas yang Bekerja</p>
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        {{ $data->links() }}
    </div>
@endsection