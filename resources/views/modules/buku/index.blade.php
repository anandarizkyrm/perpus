@extends('layouts.admin')

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Buku</h1>
    <div class="row">
        <div class="col-lg-12 mb-4">

            <!-- Illustrations -->



            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                            List Buku
                            <a href="{{route('buku.create') }}" class='btn btn-success btn-sm float-right'>Tambah Data</a>
                            <a href="{{route('print.user') }}" class='btn btn-sm btn-warning float-right mr-1 '>Cetak Data</a>


                    </h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        {!! $html->table(['class' => 'table table-bordered table-striped table-hover dataTable']) !!}
                    </div>
                </div>
            </div>


            </div>

    </div>

@endsection

@push('js')
    {!! $html->scripts() !!}
@endpush
