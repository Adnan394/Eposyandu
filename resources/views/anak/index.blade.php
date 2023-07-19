@extends('layouts/main')
@section('content')
    <div class="container mt-5">
            <table class="table table-striped">
                <thead class="bg-dark">
                <tr>
                    <th scope="col" class="text-white">No</th>
                    <th scope="col" class="text-white">Nama</th>
                    <th scope="col" class="text-white">NIK</th>
                    <th scope="col" class="text-white">Tempat Lahir</th>
                    <th scope="col" class="text-white">Tanggal Lahir</th>
                    <th scope="col" class="text-white">Kelamin</th>
                    <th scope="col" class="text-white">Usia</th>
                    <th scope="col" class="text-white">ID Ibu</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->tempat_lahir}}</td>
                            <td>{{ $item->tanggal_lahir}}</td>
                            <td>{{ $item->jenis_kelamin}}</td>
                            <td>{{ $item->usia}}</td>
                            <td>{{ $item->id_ibu}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection