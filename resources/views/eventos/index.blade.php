@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            @can('Crear evento')
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="especial">Eventos</h1>
                    </div>
                    
                        <div class="col-sm-6"> 
                            <a class="btn btn-primary float-right"
                            href="{{ route('eventos.create') }}">
                                Crear Evento
                            </a>
                        </div>
                
                </div>
            @endcan
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            @include('eventos.table')
        </div>
    </div>

   

@endsection
