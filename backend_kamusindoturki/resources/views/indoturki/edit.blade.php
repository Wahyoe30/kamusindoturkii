@extends('layouts.main')
@section('container')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Isi data Kamus</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Isi Kamus
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{route('indoturki.update',['indoturki' => $indoturki->id])}}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label>Masukkan Kata Indonesia</label>
                                <input class="form-control" name="kata_indonesia" type="text" value="{{old('kata_indonesia', $indoturki->kata_indonesia)}}" placeholder="Masukkan Kata Indonesia">
                            </div>
                            <div class="form-group">
                                <label>Masukkan Kata Turki</label>
                                <input class="form-control" name="kata_jerman" type="text" value="{{old('kata_turki', $indoturki->kata_turki)}}" placeholder="Masukkan Kata Jerman">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kata</label>
                                <input class="form-control" name="jenis_kata" type="text" value="{{old('jenis_kata', $indoturki->jenis_kata)}}" placeholder="Jenis Kata">
                            </div>
                            <div class="form-group">
                                <label>Contoh Penggunaan</label>
                                <input class="form-control" name="contoh_penggunaan" type="text" value="{{old('contoh_penggunaan', $indoturki->contoh_penggunaan)}}" placeholder="Contoh Penggunaan">
                            </div>
                            <div class="form-group">
                                <label>Contoh Penggunaan dalam Bahasa Turki</label>
                                <input class="form-control" name="contoh_penggunaan_jerman" type="text" value="{{old('contoh_penggunaan_turki', $indoturki->contoh_penggunaan_turki)}}" placeholder="Contoh Penggunaan Jerman">
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input class="form-control" name="keterangan" type="text" value="{{old('keterangan', $indoturki->keterangan)}}" placeholder="keterangan">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Submit Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection