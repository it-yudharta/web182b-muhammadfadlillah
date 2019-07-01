@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Tambah Data</div>

                <div class="card-body">
                    <form action="/hape/store" method="GET">

                        <div class="form-group">
                            <label for="id">No PPS</label>
                            <input name="id" type="tekt" class="form-control" id="id" placeholder="Masukkan No PPS">
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input name="nama" type="tekt" class="form-control" id="nama" placeholder="Masukkan Nama">
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input name="alamat" type="tekt" class="form-control" id="alamat" placeholder="Masukkan Nama">
                        </div>
                        
                        <div class="form-group">
                            <label for="ttl">Tempat Tanggal Lahir</label>
                            <input name="ttl" type="tekt" class="form-control" id="ttl" placeholder="Masukkan Nama">
                        </div>
                        
                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
