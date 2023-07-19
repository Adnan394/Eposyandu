@extends('layouts/main')
@section('content')
    <div class="container">
            <table class="table table-striped">
                <thead class="bg-dark">
                <tr>
                    <th scope="col" class="text-white">No</th>
                    <th scope="col" class="text-white">Tangal</th>
                    <th scope="col" class="text-white">Usia Saat Vaksin</th>
                    <th scope="col" class="text-white">Tinggi Badan</th>
                    <th scope="col" class="text-white">Berat Badan</th>
                    <th scope="col" class="text-white">Periode</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->tanggal_imunisasi }}</td>
                            <td>{{ $item->usia_saat_vaksin }}</td>
                            <td>{{ $item->tinggi_badan}}</td>
                            <td>{{ $item->berat_badan}}</td>
                            <td>
                                {{ $item->periode }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection