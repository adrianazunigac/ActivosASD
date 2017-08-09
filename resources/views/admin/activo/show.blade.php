@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Ver <small>Activo #{{ $activo->id }}</small></h2>
            </div>
            <div class="panel-body">

                <a href="{{ url('/admin/activo') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                <a href="{{ url('/admin/activo/' . $activo->id . '/edit') }}" title="Editar Activo"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                {!! Form::open([
                'method'=>'DELETE',
                'url' => ['admin/activo', $activo->id],
                'style' => 'display:inline'
                ]) !!}
                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Borrar', array(
                'type' => 'submit',
                'class' => 'btn btn-danger btn-xs',
                'title' => 'Delete Activo',
                'onclick'=>'return confirm("Confirm delete?")'
                ))!!}
                {!! Form::close() !!}
                <br/>
                <br/>

                <div class="table-responsive">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th>ID</th><td>{{ $activo->id }}</td>
                            </tr>
                            <tr><th> Numero </th><td> {{ $activo->numero }} </td></tr><tr><th> Nombre </th><td> {{ $activo->nombre }} </td></tr><tr><th> Descripcion </th><td> {{ $activo->descripcion }} </td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
