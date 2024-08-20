@extends('layouts.app')

@section('content_header')
    <div class="container-fluid">
        <h1 class="text-black-50">Roles y Permisos</h1>
    </div>
@endsection


@section('content')

    <div class="card">
        <div class="card-header">
            <p>{{$role->name}}</p>
        </div>
        <div class="card-body">
            <h5>LISTA DE PERMISOS</h5>
            {!! Form::model($role, ['route' => ['roles.update', $role], 'method'=>'put']) !!}
                @foreach ($permisos as $permiso)
                    <div>
                        <label>
                        {!! Form::checkbox ('permisos[]', $permiso->id, $role->hasPermissionTo($permiso->id) ? : false, ['class'=>'mr-1']) !!}
                        {{$permiso->name}}
                        </label>
                    </div>
                @endforeach
                {!! Form::submit('Asignar Permisos', ['class'=> 'btn btn-primary mt-3']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection