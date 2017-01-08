@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Laboratorio {{ $laboratorio->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/laboratorio/' . $laboratorio->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Laboratorio"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/laboratorio', $laboratorio->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Laboratorio',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $laboratorio->id }}</td>
                                    </tr>
                                    <tr><th> Tipo </th><td> {{ $laboratorio->tipo }} </td></tr><tr><th> Departamento </th><td> {{ $laboratorio->departamento }} </td></tr><tr><th> Desclaboratorio </th><td> {{ $laboratorio->desclaboratorio }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection