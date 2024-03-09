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
                        <form action="/indoturki/store" method="POST" >
                            @csrf
                            @method('post')
                            <div class="form-group">
                                <label>Masukkan Kata Indonesia</label>
                                <input class="form-control" name="kata_indonesia" type="text" placeholder="Masukkan Kata Indonesia">
                            </div>
                            <div class="form-group">
                                <label>Masukkan Kata Turki</label>
                                <input class="form-control" name="kata_turki" type="text" placeholder="Masukkan Kata Turki">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kata</label>
                                <input class="form-control" name="jenis_kata" type="text" placeholder="Jenis Kata">
                            </div>
                            <div class="form-group">
                                <label>Contoh Penggunaan</label>
                                <input class="form-control" name="contoh_penggunaan" type="text" placeholder="Contoh Penggunaan">
                            </div>
                            <div class="form-group">
                                <label>Contoh Penggunaan dalam Bahasa Turki</label>
                                <input class="form-control" name="contoh_penggunaan_turki" type="text" placeholder="contoh_penggunaan Turki">
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input class="form-control" name="keterangan" type="text" placeholder="keterangan">
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