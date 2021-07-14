@extends('layouts.admin')

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data User</h1>
    <div class="row">
        <div class="col-lg-12 mb-4">

            <!-- Illustrations -->



            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Detail Buku
                    </h6>
                </div>
                <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Judul</th>
                                <td> : {{$buku->judul}}</td>
                            </tr>
                            <tr>
                                <th>ISBN</th>
                                <td> : {{$buku->isbn}}</td>
                            </tr>
                            <tr>
                                <th>Penerbit</th>
                                <td> : {{$buku->penerbit}}</td>
                            </tr>
                            <tr>
                                <th>Tahun Terbit</th>
                                <td> : {{$buku->tahun_terbit}}</td>
                            </tr>
                            <tr>
                                <th>Jumlah</th>
                                <td> : {{$buku->jumlah}}</td>
                            </tr>
                            <tr>
                                <th>Lokasi Rak</th>
                                <td> : {{$buku->lokasi}}</td>
                            </tr>
                            <tr>
                                <th>Deskripsi Buku</th>
                                <td> : {{$buku->deskripsi}}</td>
                            </tr>
                            <tr>
                                <th>Cover Buku</th>
                                <td>
                                    <img src="{{asset('cover/'.$buku->cover)}}" width="100" height="100" alt="">
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <a href="{{route('buku.edit', $buku->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{route('buku.index', $buku->id)}}" class="btn btn-sm btn-danger">Kembali</a>
                                </td>

                            </tr>
                        </table>
                </div>
            </div>


            </div>

    </div>

@endsection
