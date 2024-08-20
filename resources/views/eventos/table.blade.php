<div class="row">
    <div class="col-12">
        @can('Crear evento')
        <div class="card">
            <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Fecha</th>
                                <th>Ubicacion</th>
                                <th>Precio</th>
                                <th>Imagen</th>
                                {{-- <th>Suscripcion</th> --}}
                                <th>Usuario</th>
                                <th>Tipo de Categoría</th>
                                <th colspan="3">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($eventos as $evento)
                                <tr>
                                    <td>{{ $evento->nombre }}</td>
                                    <td>{{ $evento->descripcion }}</td>
                                    <td style="width: 120px">{{ $evento->fecha }}</td>
                                    <td>{{ $evento->ubicacion }}</td>
                                    <td>{{ $evento->precio }}</td>
                                    {{-- <td>{{ $evento->imagen }}</td> --}}
                                    <td><img src="{{ asset('images/Eventos_img/' . $evento->imagen) }}" alt="{{ $evento->nombre }}" width="100"></td>
                                    {{-- <td>{{ $evento->suscripcion }}</td> --}}
                                    <td>{{$evento->autor }}</td>
                                    <td>{{ $evento->categorias->descripcion }}</td>
                                    <td style="width: 120px">
                            
                                        {!! Form::open(['route' => ['eventos.destroy', $evento->id], 'method' => 'delete']) !!}
                                        
                                            <div class='btn-group'>
                                                <a href="{{ route('eventos.show', [$evento->id]) }}" class='btn btn-default btn-xs'>
                                                    <i class="far fa-eye"></i>
                                                </a>
                                        
                                                @can('Modificar evento')
                                                    <a href="{{ route('eventos.edit', [$evento->id]) }}" class='btn btn-default btn-xs'>
                                                        <i class="far fa-edit"></i>
                                                    </a>
                                                @endcan
                                            
                                                @can('Eliminar evento')
                                                    {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Estás seguro?')"]) !!}
                                                @endcan
                                            </div>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endcan
    </div>
</div>
{{-- @can('Crear evento')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Galería de imágenes</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($eventos as $evento)
                            <div class="col-sm-2">
                                <a href="{{ $evento->imagen }}" data-toggle="lightbox" data-gallery="gallery">
                                    <img src="{{ $evento->imagen }}" class="img-fluid mb-2" alt="{{ $evento->nombre }}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endcan --}}

{{-- <link rel="stylesheet" href="css/style.css" media="screen" /> --}}
<link rel="stylesheet" href="{{ asset('css/style.css') }}">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
{{-- <script src="js/jquery.timelinr-0.9.7.js"></script> --}}
<script src="{{ asset('js/jquery.timelinr-0.9.7.js') }}"></script>

<script>
  $(function(){
    $().timelinr({
      arrowKeys: 'true'
    })
  });
</script>

<section class="content-header">
    <div class="container-fluid">
      <h1 style="font-size: 50px">LISTA DE EVENTOS</h1>
    </div>
</section>

<div id="timeline" style="width: 1600px">
    {{-- <ul id="dates">

        //puedes cambiar nombre de la categoria por un incrementador empezando desde el 1
        
        @foreach ($eventos as $evento)
            <li><a href="#1900">{{ $evento->cat_id }}</a></li>
        @endforeach
    </ul> --}}

    <ul id="dates">
        @foreach ($eventos as $evento)
            <li><a href="#1900">{{ $loop->iteration }}</a></li>
        @endforeach
    </ul>

    <ul id="issues">
        @foreach ($eventos as $evento)
            <li id="1900" class="descripcion">
                {{-- <img src="{{ $evento->imagen }}" width="256" height="256" /> --}}
                <img src="{{asset('images/Eventos_img/' . $evento->imagen) }}" width="256" height="256" />
                <a href="{{ route('eventos.show', [$evento->id]) }}"><h1>{{ $evento->nombre }}</h1></a>
                <p>{{ $evento->descripcion }} Fecha: {{ $evento->fecha }} - Precio: Gs. {{ $evento->precio }}</p>
                <p>Ubicación: <a href="{{ $evento->enlace }}"  class="negro" >{{ $evento->ubicacion }}</a></p>
            </li>
        @endforeach
    </ul>
    </ul>
    <div id="grad_left"></div>
    <div id="grad_right"></div>
    <a href="#" id="next">+</a>
    <a href="#" id="prev">-</a>
  </div>
