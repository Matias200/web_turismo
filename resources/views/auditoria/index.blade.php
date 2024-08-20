@extends('layouts.app')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Auditoria</h1>
            </div>  
        </div>
    </div>
</section>

 {{-- EMPIEZA TABLA --}}
<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="categorias-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Fecha</th>
                    <th>Ubicacion</th>
                    <th>Precio</th>
                    <th>Categoria</th>
                    <th>Accion</th>
                    <th>Autor</th>
                    <th>Fecha Modificacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach($evento as $e)
                    <tr>
                        <td>{{ $e->id }}</td>
                        <td>{{ $e->nombre }}</td>
                        <td>{{ $e->descripcion }}</td>
                        <td>{{ $e->fecha }}</td>
                        <td>{{ $e->ubicacion }}</td>
                        <td>{{ $e->precio }}</td>
                        <td>{{ $e->categorias->descripcion }}</td>
                        <td>{{ $e->accion }}</td>
                        <td>{{ $e->autor }}</td>
                        <td>{{ $e->fecha_modificacion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>


@endsection