@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Manajemen CEO</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('flash::message')
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{ url('ceos/create') }}" class="btn btn-dark mb-3">Tambah CEO <span
                            class="fa fa-plus"></span></a>
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>
                            Manajemen CEO

                        </div>
                        <div class="card-body">
                            @include('ceos.table')
                            <div class="pull-right mr-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
