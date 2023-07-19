@extends('layouts/main')
@section('content')
    <div class="container">
        <div class="">
            <h1>Data Vaksin</h1>
            <p class="text-muted">Data Beberapa Vaksin yang tersedia</p>
        </div>
        <livewire:modal.add-vaksin />
            <table class="table table-striped">
                <thead class="bg-dark">
                <tr>
                    <th scope="col" class="text-white">No</th>
                    <th scope="col" class="text-white">Nama</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <th scope="row" >{{ $loop->iteration }}</th>
                            <td>{{ $item->nama_vaksin }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        {{ $data->links() }}
    </div>
@endsection