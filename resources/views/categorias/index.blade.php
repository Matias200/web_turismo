@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Categorias</h1>
                </div>
                @can('Crear categoria')
                    <div class="col-sm-6">
                        <a class="btn btn-primary float-right"
                        href="{{ route('categorias.create') }}">
                            Crear Cateogria
                        </a>
                    </div>
                @endcan
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            @include('categorias.table')
        </div>
    </div>

@endsection
