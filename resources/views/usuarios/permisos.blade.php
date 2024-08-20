@extends('layouts.app')


@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Administración de Permisos</h1>
            </div>
            {{-- <div class="col-sm-6">
                <x-adminlte-button label="Nuevo" theme="primary" icon="fas fa-key" class="float-right" data-toggle="modal" data-target="#modalPurple"/>
            </div> --}}
        </div>
    </div>
</section>

<div class="card">
    
 

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table" id="permisos-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        {{-- <th colspan="3">Acción</th> --}}
                    </tr>
                </thead>
                <tbody>
                

                @foreach($permisos as $permiso)
                    <tr>
                        <td>{{ $permiso->id }}</td>
                        <td>{{ $permiso->name }}</td>
                        {{-- <td style="width: 120px">
                            {!! Form::open(['route' => ['permisos.destroy', $permiso->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <a href="{{ route('permisos.show', [$permiso->id]) }}" class='btn btn-default btn-xs'>
                                    <i class="far fa-eye"></i>
                                </a>
                                <a href="{{ route('permisos.edit', [$permiso->id]) }}" class='btn btn-default btn-xs'>
                                    <i class="far fa-edit"></i>
                                </a>
                                {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                            </div>
                            {!! Form::close() !!}
                        </td> --}}
                    </tr>
                @endforeach

                            {{-- Themed --}}
                <x-adminlte-modal id="modalPurple" title="Nuevo Permiso" theme="primary"
                    icon="fas fa-bolt" size='lg' disable-animations>
                    <form action="{{route ('permisos.store')}}" method="post">
                        @csrf
                        {{-- With prepend slot --}}
                        <x-adminlte-input name="nombre" label="Nombre" placeholder="Ingresar Permiso..." label-class="text-lightblue"/>
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-user text-lightblue"></i>
                                </div>
                            </x-slot>
                        <x-adminlte-button class="btn-flat" type="submit" label="Guardar" theme="primary" icon="fas fa-lg fa-save"/>
                    </form>

                </x-adminlte-modal>
                            </tbody>
            </table>
            
        </div>




        </div>
    </div>
    </div>

</div>


@endsection

