@extends('layouts.app')


@section('content')

    <div class="card">
        <h1>Usuarios y Roles</h1>
        <div class="card-header">
            <p>{{$user->name}}</p>
        </div>
        <div class="card-body">
            <h5>LISTA DE PERMISOS</h5>
            {!! Form::model($user, ['route' => ['asignar.update', $user], 'method'=>'put']) !!}
                @foreach ($roles as $role)
                    <div>
                        <label>
                        {!! Form::checkbox ('roles[]', $role->id, $user->hasAnyRole($role->id) ? : false, ['class'=>'mr-1']) !!}
                        {{$role->name}}
                        </label>
                    </div>
                @endforeach
                {!! Form::submit('Asignar roles', ['class'=> 'btn btn-primary mt-3']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection