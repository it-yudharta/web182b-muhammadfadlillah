@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Selamat Masuk Ke Input Data Santri Baru
                           <a class="btn btn-primary btn-sm float-right" href="/hape/tambah">Tambah Data</a>
                </div>
                

                <div class="card-body">

                    <table class="table">
                      <thead>
                        <tr>
                            <th scope="col">No PPS</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Tempat Tanggal Lahir</th>
                            <th scope="col">Manage Data</th>
                        </tr>                   
                      </thead>
                      <tbody>
                         @foreach ( $santri_barus as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>{{$item->ttl}}</td>
                            <td>
                                     <a class="btn btn-warning btn-sm float-sm" href="/hape/{{$item->id}}/edit">Edit</a>
                                     <a class="btn btn-danger btn-sm float-sm" href="/hape/{{$item->id}}/hapus">Hapus</a>
                            </td>
                        </tr>    
                         @endforeach
                       </tbody>
                       </table>  


                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
