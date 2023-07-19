@extends('layouts/app')
@section('title')
<div class="container">
    <h1>Data Ibu</h1>
</div>
@endsection
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <p class="text-muted">Data Ibu yang Terdaftar</p>
        </div>
            <table class="table table-striped">
                <thead class="bg-dark">
                <tr>
                    <th scope="col" class="text-white">No</th>
                    <th scope="col" class="text-white">Nama</th>
                    <th scope="col" class="text-white">NIK</th>
                    <th scope="col" class="text-white">Alamat</th>
                    <th scope="col" class="text-white">Telepon</th>
                    <th scope="col" class="text-white">Gambar</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->NIK }}</td>
                            <td>{{ $item->alamat}}</td>
                            <td>{{ $item->no_telp}}</td>
                            <td>
                                <img src="{{ $item->image}}" alt="" width="50px">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection