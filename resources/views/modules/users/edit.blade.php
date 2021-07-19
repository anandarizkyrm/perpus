@extends('layouts.admin')

@section('main-content')

<div class="row">
<div class="col-lg-12 mb-4">


    <!-- Approach -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Edit Data User
            </h6>
        </div>
        <div class="card-body">
            <form action="{{route('user.update', $user->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="" class="mb-1">Nama Depan</label>
                    <input type="text" class="form-control py-4" value="{{is_null($user) ? old('name') : $user->name}}" name ="name" placeholder="Masukan Nama Depan">
                </div>

                <div class="form-group">
                    <label for="" class="mb-1">Nama Belakang</label>
                    <input type="text" class="form-control py-4" value="{{is_null($user) ? old('last_name') : $user->last_name}}" name ="last_name" placeholder="Masukan Nama Belakang">
                </div>

                <div class="form-group">
                    <label for="" class="mb-1">E-Mail</label>
                    <input type="email" class="form-control py-4" value="{{$user->email}}" name ="email" placeholder="Masukan Email">
                </div>

                <div class="form-group">
                    <label for="" class="mb-1">Password</label>
                    <input required type="password" class="form-control py-4"  value="" name="password" placeholder="Masukan password">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    <a href="{{route('user.index')}}" class="btn btn-sm btn-danger" > Kembali</a>
                </div>


            </form>
        </div>
    </div>
</div>
</div>

@endsection
