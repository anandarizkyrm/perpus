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

                            <a href="{{route('user.create') }}" class='btn btn-success btn-sm float-right'>Tambah Data</a>
                            <a href="{{route('print.user') }}" class='btn btn-sm btn-warning float-right mr-1 '>Cetak Data</a>


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
                                        <td>{{$n->name }} {{$n->last_name}}</td>
                                        <td>{{$n->email}}</td>
                                        <td>
                                            <form method="POST" action="{{route('user.destroy',$n->id)}}" >
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('user.edit',$n->id)}}" class="btn btn-warning btn-sm">EDIT</a>
                                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                            @endforeach
                        </table>
                </div>
            </div>


            </div>

    </div>

@endsection
