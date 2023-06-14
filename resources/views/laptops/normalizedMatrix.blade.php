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
                                <th>ID</th>
                                <th>Merk</th>
                                <th>Type</th>
                                <th>CPU</th>
                                <th>RAM</th>
                                <th>Storage</th>
                                <th>Resolusi Layar</th>
                                <th>VGA</th>
                                <th>Normalized CPU</th>
                                <th>Normalized RAM</th>
                                <th>Normalized Storage</th>
                                <th>Normalized Resolusi Layar</th>
                                <th>Normalized VGA</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($normalizedMatrix as $laptop)
                                <tr>
                                    <td>{{ $laptop['id'] }}</td>
                                    <td>{{ $laptop['merk'] }}</td>
                                    <td>{{ $laptop['type'] }}</td>
                                    <td>{{ $laptop['cpu'] }}</td>
                                    <td>{{ $laptop['ram'] }}</td>
                                    <td>{{ $laptop['storage'] }}</td>
                                    <td>{{ $laptop['resolusi_layar'] }}</td>
                                    <td>{{ $laptop['vga'] }}</td>
                                    <td>{{ $laptop['normalized_cpu'] }}</td>
                                    <td>{{ $laptop['normalized_ram'] }}</td>
                                    <td>{{ $laptop['normalized_storage'] }}</td>
                                    <td>{{ $laptop['normalized_resolusi_layar'] }}</td>
                                    <td>{{ $laptop['normalized_vga'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
