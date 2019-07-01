@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Tambah Data</div>

                <div class="card-body">
                <form action="/hape/{{$SantriBarus->id}}/update" method="GET">
                 @csrf

                    <div class="form-group">
                        <label for="id">No PPS</label>
                        <input name="id" type="tekt" class="form-control" id="id" value="{{$SantriBarus->id}}">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input name="nama" type="tekt" class="form-control" id="nama" value="{{$SantriBarus->nama}}">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input name="alamat" type="tekt" class="form-control" id="alamat" value="{{$SantriBarus->alamat}}">
                    </div>
                      
                    <div class="form-group">
                        <label for="ttl">Tempat Tanggal Lahir</label>
                        <input name="ttl" type="tekt" class="form-control" id="ttl" value="{{$SantriBarus->ttl}}">
                    </div>
                      
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
