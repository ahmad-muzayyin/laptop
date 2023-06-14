@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Laptop Details</h1>
        </div>
        <div class="card-body">
            <div class="card-text">
                <p><strong>Merk:</strong> {{ $laptop->merk }}</p>
                <p><strong>Type:</strong> {{ $laptop->type }}</p>
                <p><strong>CPU:</strong> {{ $laptop->cpu }}</p>
                <p><strong>RAM:</strong> {{ $laptop->ram }}</p>
                <p><strong>Storage:</strong> {{ $laptop->storage }}</p>
                <p><strong>Resolusi Layar:</strong> {{ $laptop->resolusi_layar }}</p>
                <p><strong>VGA:</strong> {{ $laptop->vga }}</p>
                <p><strong>Nilai CPU:</strong> {{ $laptop->nilai_cpu }}</p>
                <p><strong>Nilai RAM:</strong> {{ $laptop->nilai_ram }}</p>
                <p><strong>Nilai Storage:</strong> {{ $laptop->nilai_storage }}</p>
                <p><strong>Nilai Resolusi Layar:</strong> {{ $laptop->nilai_resolusi_layar }}</p>
                <p><strong>Nilai VGA:</strong> {{ $laptop->nilai_vga }}</p>
            </div>
        </div>
    </div>
@endsection
