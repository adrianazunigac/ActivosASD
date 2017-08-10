<div class="form-group {{ $errors->has('numero') ? 'has-error' : ''}}">
    {!! Form::label('numero', 'Numero Inventario', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('numero', null, ['class' => 'form-control','required'=> true]) !!}
        {!! $errors->first('numero', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
{!! Form::label('nombre', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
<div class="col-md-6">
    {!! Form::text('nombre', null, ['class' => 'form-control','required'=> true]) !!}
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
</div><div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
{!! Form::label('descripcion', 'Descripcion', ['class' => 'col-md-4 control-label']) !!}
<div class="col-md-6">
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
</div>
</div><div class="form-group {{ $errors->has('tipo') ? 'has-error' : ''}}">
{!! Form::label('tipo', 'Tipo', ['class' => 'col-md-4 control-label']) !!}
<div class="col-md-6">
    <select name="tipo" id="tipo" class="form-control">
      @foreach ($tipo as $tipo)
      <option  value="{{$tipo->id}}" >{{$tipo->nombre}}</option>
      @endforeach
  </select>
</div>
</div><div class="form-group {{ $errors->has('peso') ? 'has-error' : ''}}">
{!! Form::label('peso', 'Peso', ['class' => 'col-md-4 control-label']) !!}
<div class="col-md-6">
    {!! Form::number('peso', null, ['class' => 'form-control']) !!}
    {!! $errors->first('peso', '<p class="help-block">:message</p>') !!}
</div>
</div><div class="form-group {{ $errors->has('talla') ? 'has-error' : ''}}">
{!! Form::label('talla', 'Talla', ['class' => 'col-md-4 control-label']) !!}
<div class="col-md-6">
    {!! Form::number('talla', null, ['class' => 'form-control']) !!}
    {!! $errors->first('talla', '<p class="help-block">:message</p>') !!}
</div>
</div><div class="form-group {{ $errors->has('ancho') ? 'has-error' : ''}}">
{!! Form::label('ancho', 'Ancho', ['class' => 'col-md-4 control-label']) !!}
<div class="col-md-6">
    {!! Form::number('ancho', null, ['class' => 'form-control']) !!}
    {!! $errors->first('ancho', '<p class="help-block">:message</p>') !!}
</div>
</div><div class="form-group {{ $errors->has('largo') ? 'has-error' : ''}}">
{!! Form::label('largo', 'Largo', ['class' => 'col-md-4 control-label']) !!}
<div class="col-md-6">
    {!! Form::number('largo', null, ['class' => 'form-control']) !!}
    {!! $errors->first('largo', '<p class="help-block">:message</p>') !!}
</div>
</div><div class="form-group {{ $errors->has('fechacompra') ? 'has-error' : ''}}">
{!! Form::label('fechacompra', 'Fechacompra', ['class' => 'col-md-4 control-label']) !!}
<div class="col-md-6">
    {!! Form::date('fechacompra', null, ['class' => 'form-control','required'=> true]) !!}
    {!! $errors->first('fechacompra', '<p class="help-block">:message</p>') !!}
</div>
</div><div class="form-group {{ $errors->has('fechabaja') ? 'has-error' : ''}}">
{!! Form::label('fechabaja', 'Fechabaja', ['class' => 'col-md-4 control-label']) !!}
<div class="col-md-6">
    {!! Form::date('fechabaja', null, ['class' => 'form-control']) !!}
    {!! $errors->first('fechabaja', '<p class="help-block">:message</p>') !!}
</div>
</div><div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
{!! Form::label('estado', 'Estado', ['class' => 'col-md-4 control-label']) !!}
<div class="col-md-6">
    <select name="estado" id="estado" class="form-control">
      @foreach ($estado as $estado)
      <option  value="{{$estado->id}}" >{{$estado->nombre}}</option>
      @endforeach
  </select>
</div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Guardar', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
