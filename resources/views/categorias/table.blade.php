<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="categorias-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descripcion</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->descripcion }}</td>
                        <td style="width: 120px">
                            {!! Form::open(['route' => ['categorias.destroy', $categoria->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <a href="{{ route('categorias.show', [$categoria->id]) }}" class='btn btn-default btn-xs'>
                                    <i class="far fa-eye"></i>
                                </a>
                                @can('Modificar categoria')
                                    <a href="{{ route('categorias.edit', [$categoria->id]) }}" class='btn btn-default btn-xs'>
                                        <i class="far fa-edit"></i>
                                    </a>
                                @endcan

                                @can('Eliminar categoria')
                                {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                @endcan
                            </div>

                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $categorias])
        </div>
    </div>
</div>
