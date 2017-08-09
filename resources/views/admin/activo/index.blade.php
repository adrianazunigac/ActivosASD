@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Activos <small>Crear Activos</small></h2>
                </div>
                <div class="panel-body">
                    {!! Form::open(['url' => '/admin/activo', 'class' => 'form-horizontal', 'files' => true]) !!}

                    @include ('admin.activo.form')

                    {!! Form::close() !!}
                    {!! Form::open(['method' => 'GET', 'url' => '/admin/activo', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Buscar...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    {!! Form::close() !!}

                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>ID</th><th>Numero</th><th>Nombre</th><th>Descripcion</th><th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($activo as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->numero }}</td><td>{{ $item->nombre }}</td><td>{{ $item->descripcion }}</td>
                                    <td>
                                        <a href="{{ url('/admin/activo/' . $item->id) }}" title="View Activo"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                        <a href="{{ url('/admin/activo/' . $item->id . '/edit') }}" title="Edit Activo"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                        {!! Form::open([
                                        'method'=>'DELETE',
                                        'url' => ['/admin/activo', $item->id],
                                        'style' => 'display:inline'
                                        ]) !!}
                                        {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Borrar', array(
                                        'type' => 'submit',
                                        'class' => 'btn btn-danger btn-xs',
                                        'title' => 'Delete Activo',
                                        'onclick'=>'return confirm("Esta seguro de eliminar el registro?")'
                                        )) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $activo->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
