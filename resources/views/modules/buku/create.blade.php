@extends('layouts.admin')

@section('main-content')

<div class="row">
<div class="col-lg-12 mb-4">


    <!-- Approach -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Tambah Data Buku
            </h6>
        </div>
        <div class="card-body">
            @include('partials.pesan')
            {!! Form::open(['url'=>route('buku.store'), 'method' => 'POST', 'files' => true])!!}
                @include('modules.buku._form');
            {!!Form::close() !!}
        </div>
    </div>
</div>
</div>

@endsection
