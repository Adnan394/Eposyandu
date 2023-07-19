@extends('layouts/main')
@section('content')
    <div class="container">
        <div class="">
            <h1>Data Posyandu</h1>
            <p class="text-muted">Data Posyandu Tersedia</p>
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        {{ $data->links() }}
    </div>
@endsection