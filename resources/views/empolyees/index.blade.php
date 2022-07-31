@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Manajemen Empolyees</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('flash::message')
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{ url('empolyees/create') }}" class="btn btn-dark mb-3">Tambah Empolyee <span
                            class="fa fa-plus"></span></a>
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>
                            Manajemen Empolyees
                            <a class="pull-right" href="{{ route('empolyees.create') }}"><i
                                    class="fa fa-plus-square fa-lg"></i></a>
                        </div>
                        <div class="card-body">
                            @include('empolyees.table')
                            <div class="pull-right mr-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
