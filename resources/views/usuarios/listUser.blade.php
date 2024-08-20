@extends('layouts.app')



@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Asignar Roles a Usuarios</h1>
            </div>
            <div class="col-sm-6">
                
            </div>
        </div>
    </div>
</section>

<div class="card">

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table" id="user-table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th colspan="3">Acción</th>
                </tr>
                </thead>
                <tbody>
                

                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td style="width: 120px">
                            {!! Form::open(['route' => ['asignar.destroy', $user->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                {{-- <a href="{{ route('asignar.show', [$user->id]) }}" class='btn btn-default btn-xs'>
                                    <i class="far fa-eye"></i>
                                </a> --}}
                                <a href="{{ route('asignar.edit', [$user->id]) }}" class='btn btn-default btn-xs'>
                                    <i class="far fa-edit"></i>
                                </a>
                                {{-- {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!} --}}
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            
        </div>





        </div>
    </div>
    </div>

</div>


@endsection

