<!-- ranking.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ $title }}</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="multi-filter-select" class="display table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Merk</th>
                                <th>Type</th>
                                <th>Skor Total</th>
                                <th>Peringkat</th>
                                <th>Aksi</th> <!-- Kolom Aksi ditambahkan -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ranking as $index => $laptop)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $laptop['merk'] }}</td>
                                    <td>{{ $laptop['type'] }}</td>
                                    <td>{{ $laptop['total_score'] }}</td>
                                    <td>{{ $laptop['ranking'] }}</td>
                                    <td>
                                        <!-- Tautan untuk melihat laptop dengan spesifikasinya -->
                                        <a href="{{ route('laptops.show', $laptop['id']) }}" class="btn btn-primary">Lihat
                                            Spesifikasi</a>
                                        <!-- Tautan untuk mencari spesifikasi laptop di Google -->
                                        <a href="https://www.google.com/search?q={{ $laptop['merk'] }}+{{ $laptop['type'] }}+spesifikasi"
                                            class="btn btn-info" target="_blank">Google</a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
