<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', null, ['class' => 'form-control','id'=>'fecha']) !!}
</div>

<!-- @push('page_scripts')
    <script type="text/javascript">
        $('#fecha').datepicker()
    </script>
@endpush -->

<!-- Ubicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ubicacion', 'Ubicacion:') !!}
    {!! Form::text('ubicacion', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Enlace de ubicacion -->
<div class="form-group col-sm-6">
    {!! Form::label('enlace', 'Enlace:') !!}
    {!! Form::text('enlace', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio', 'Precio:') !!}
    {!! Form::number('precio', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Imagen Field
<div class="form-group col-sm-6">
    {{-- {!! Form::label('imagen', 'Imagen:') !!} --}}
    <div class="input-group">
        <div class="custom-file">
            {{-- {!! Form::file('imagen', ['class' => 'custom-file-input']) !!}
            {!! Form::label('imagen', 'Choose file', ['class' => 'custom-file-label']) !!} --}}
        </div>
    </div>
</div>
<div class="clearfix"></div> -->



<div class="form-group col-sm-6">
{!! Form::label('imagen', 'Imagen:') !!}
    <div class="input-group">
        {!! Form::file('imagen', ['class' => 'custom-file-input']) !!}
        {!! Form::label('imagen', 'Seleccionar archivo', ['class' => 'custom-file-label']) !!}

    </div>

</div>

<!-- User Id Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('autor_id', 'Autor:') !!} --}}
    {{-- {!! Form::select('eventos->name', $users, null, ['class' => 'form-control custom-select']) !!} --}}
    {{-- {!! Form::select('autor_id', $users, auth()->user()->id, ['class' => 'form-control custom-select']) !!} --}}
{{-- </div> --}}

<!-- Cat Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cat_id', 'Categoría:') !!}
    {!! Form::select('cat_id', $cats, null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Suscripcion Field -->
{{-- <div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('suscripcion', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('suscripcion', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('suscripcion', 'Suscripcion', ['class' => 'form-check-label']) !!}
    </div>
</div> --}}