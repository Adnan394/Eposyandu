@extends('layouts/app')
@section('title')
<div class="container">
    <h1>Data User</h1>
</div>
@endsection
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <p class="text-muted">Data User yang Terdaftar</p>
        </div>
            <table class="table table-striped">
                <thead class="bg-dark">
                <tr>
                    <th scope="col" class="text-white">No</th>
                    <th scope="col" class="text-white">Nama</th>
                    <th scope="col" class="text-white">Email</th>
                    <th scope="col" class="text-white">Role</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ ($item->role == 0) ? 'Admin' : 'User' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection