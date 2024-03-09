@extends('layouts.main')

@section('container')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="panel-body">
            <a href="create" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Kosakkata Indonesia</th>
                            <th class="text-center">Kosakata Turki</th>
                            <th class="text-center">Jenis Kata</th>
                            <th class="text-center">Contoh Penggunaan Indoensia</th>
                            <th class="text-center">Contoh Penggunaan Turki</th>
                            <th class="text-center">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($indoturki as $index => $data)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td class="text-center">{{ $data->kata_indonesia }}</td>
                                <td class="text-center">{{ $data->kata_turki }}</td>
                                <td class="text-center">{{ $data->jenis_kata }}</td>
                                <td class="text-center">{{ $data->contoh_penggunaan }}</td>
                                <td class="text-center">{{ $data->contoh_penggunaan_turki }}</td>
                                <td class="text-center">{{ $data->keterangan }}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('indoturki.destroy', ['indoturki' => $data->id]) }}" method="POST">
                                        <a href="{{ route('indoturki.edit', ['indoturki' => $data->id]) }}"
                                            class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">No data available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
