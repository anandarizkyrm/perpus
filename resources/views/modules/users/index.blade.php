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
                        List Data User
                        <a href="{{route('user.create') }}" class='btn btn-success float-right'>Tambah Data</a>
                    </h6>
                </div>
                <div class="card-body">
                        <table class="table bordered">
                            <tr>
                                <th>NO.</th>
                                <th>NAMA LENGKAP</th>
                                <th>E-MAIL</th>
                                <th>AKSI</th>
                            </tr>
                            @foreach ($user as $n)
                                    <tr>
                                        <td>{{$n->id}}</td>
                                        <td>{{$n->name}}</td>
                                        <td>{{$n->email}}</td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm">EDIT</a>
                                            <a href="" class="btn btn-danger btn-sm">HAPUS</a>
                                        </td>
                                    </tr>
                            @endforeach
                        </table>
                </div>
            </div>


            </div>

    </div>

@endsection
