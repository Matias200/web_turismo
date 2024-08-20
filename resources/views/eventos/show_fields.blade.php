<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $eventos->nombre }}</p>
</div>

<!-- Descripcion Field -->
<div class="col-sm-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $eventos->descripcion }}</p>
</div>

<!-- Fecha Field -->
<div class="col-sm-12">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{{ $eventos->fecha }}</p>
</div>

<!-- Ubicacion Field -->
<div class="col-sm-12">
    {!! Form::label('ubicacion', 'Ubicacion:') !!}
    <p>{{ $eventos->ubicacion }}</p>
</div>

<!-- Precio Field -->
<div class="col-sm-12">
    {!! Form::label('precio', 'Precio:') !!}
    <p>{{ $eventos->precio }}</p>
</div>

<!-- Imagen Field -->
<div class="col-sm-12">
    {!! Form::label('imagen', 'Imagen:') !!}
    <p>{{ $eventos->imagen }}</p>
</div>

<!-- Suscripcion Field -->
{{-- <div class="col-sm-12">
    {!! Form::label('suscripcion', 'Suscripcion:') !!}
    <p>{{ $eventos->suscripcion }}</p>
</div> --}}

<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'Usuario:') !!}
    <p>{{ $eventos->user_id}}</p>
</div>

<!-- Cat Id Field -->
<div class="col-sm-12">
    {!! Form::label('cat_id', 'Tipo de Categoría:') !!}
    <p>{{ $eventos->categorias->descripcion}}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{{ $eventos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Modificado:') !!}
    <p>{{ $eventos->updated_at }}</p>
</div>


