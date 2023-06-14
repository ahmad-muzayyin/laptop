@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <a href="{{ route('normalizedMatrix') }}" class="btn btn-primary">Show Normalized Matrix</a>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">List of Laptops</h4>
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
                                <th>Resolution</th>
                                <th>VGA</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($laptops as $laptop)
                                <tr>
                                    <td>{{ $laptop->id }}</td>
                                    <td>{{ $laptop->merk }}</td>
                                    <td>{{ $laptop->type }}</td>
                                    <td>{{ $laptop->cpu }}</td>
                                    <td>{{ $laptop->ram }}</td>
                                    <td>{{ $laptop->storage }}</td>
                                    <td>{{ $laptop->resolusi_layar }}</td>
                                    <td>{{ $laptop->vga }}</td>
                                    <td>
                                        <a href="{{ route('laptops.show', $laptop->id) }}" class="btn btn-primary">View
                                            Specifications</a>
                                        <a href="https://www.google.com/search?q={{ $laptop->merk }}+{{ $laptop->type }}+spesifikasi"
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
