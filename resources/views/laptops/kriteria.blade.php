@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <a href="{{ route('normalizedMatrix') }}" class="btn btn-primary">Show Normalized Matrix</a>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">KRITERIA CPU</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form method="POST" action="{{ route('laptopsCpuUpdate') }}">
                        @csrf
                        <table id="multi-filter-select" class="display table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>CPU</th>
                                    <th>Nilai CPU</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($cpu as $laptop)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>
                                            {{ $laptop->cpu }}
                                        </td>
                                        <td>
                                            <select name="nilai_cpu[]" id="inputFloatingLabel"
                                                class="form-control input-border-bottom">
                                                <option value="">-- Pilih Salah Satu --</option>
                                                <option value="5">Sangat Tinggi</option>
                                                <option value="4">Tinggi</option>
                                                <option value="3">Cukup</option>
                                                <option value="2">Rendah</option>
                                                <option value="1">Sangat Rendah</option>
                                            </select>
                                            <input type="hidden" name="laptop_id[]" value="{{ $laptop->cpu }}">
                                        </td>
                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary btn-sm">Save and Update</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">KRITERIA RAM</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form method="POST" action="{{ route('laptopsRamUpdate') }}">
                        @csrf
                        <table id="multi-filter-select" class="display table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>RAM</th>
                                    <th>Nilai RAM</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($ram as $laptop)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>
                                            {{ $laptop->ram }} GB
                                        </td>
                                        <td>
                                            <select name="nilai_ram[]" id="inputFloatingLabel"
                                                class="form-control input-border-bottom">
                                                <option value="">-- Pilih Salah Satu --</option>
                                                <option value="5">Sangat Tinggi</option>
                                                <option value="4">Tinggi</option>
                                                <option value="3">Cukup</option>
                                                <option value="2">Rendah</option>
                                                <option value="1">Sangat Rendah</option>
                                            </select>
                                            <input type="hidden" name="laptop_id[]" value="{{ $laptop->ram }}">
                                        </td>
                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary btn-sm">Save and Update</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">KRITERIA STORAGE</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form method="POST" action="{{ route('laptopsStorageUpdate') }}">
                        @csrf
                        <table id="multi-filter-select" class="display table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>STORAGE</th>
                                    <th>Nilai STORAGE</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($storage as $laptop)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>
                                            {{ $laptop->storage }} GB
                                        </td>
                                        <td>
                                            <select name="nilai_storage[]" id="inputFloatingLabel"
                                                class="form-control input-border-bottom">
                                                <option value="">-- Pilih Salah Satu --</option>
                                                <option value="5">Sangat Tinggi</option>
                                                <option value="4">Tinggi</option>
                                                <option value="3">Cukup</option>
                                                <option value="2">Rendah</option>
                                                <option value="1">Sangat Rendah</option>
                                            </select>
                                            <input type="hidden" name="laptop_id[]" value="{{ $laptop->storage }}">
                                        </td>
                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary btn-sm">Save and Update</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">KRITERIA RESOLUSI LAYAR</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form method="POST" action="{{ route('laptopsResolutionUpdate') }}">
                        @csrf
                        <table id="multi-filter-select" class="display table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>RESOLUSI LAYAR</th>
                                    <th>Nilai Resolution</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($resolution as $laptop)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>
                                            {{ $laptop->resolusi_layar }}
                                        </td>
                                        <td>
                                            <select name="nilai_resolusi_layar[]" id="inputFloatingLabel"
                                                class="form-control input-border-bottom">
                                                <option value="">-- Pilih Salah Satu --</option>
                                                <option value="5">Sangat Tinggi</option>
                                                <option value="4">Tinggi</option>
                                                <option value="3">Cukup</option>
                                                <option value="2">Rendah</option>
                                                <option value="1">Sangat Rendah</option>
                                            </select>
                                            <input type="hidden" name="laptop_id[]" value="{{ $laptop->resolusi_layar }}">
                                        </td>
                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary btn-sm">Save and Update</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">KRITERIA VGA</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form method="POST" action="{{ route('laptopsVgaUpdate') }}">
                        @csrf
                        <table id="multi-filter-select" class="display table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>VGA</th>
                                    <th>Nilai VGA</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($vga as $laptop)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>
                                            {{ $laptop->vga }}
                                        </td>
                                        <td>
                                            <select name="nilai_vga[]" id="inputFloatingLabel"
                                                class="form-control input-border-bottom">
                                                <option value="">-- Pilih Salah Satu --</option>
                                                <option value="5">Sangat Tinggi</option>
                                                <option value="4">Tinggi</option>
                                                <option value="3">Cukup</option>
                                                <option value="2">Rendah</option>
                                                <option value="1">Sangat Rendah</option>
                                            </select>
                                            <input type="hidden" name="laptop_id[]" value="{{ $laptop->vga }}">
                                        </td>
                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary btn-sm">Save and Update</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
