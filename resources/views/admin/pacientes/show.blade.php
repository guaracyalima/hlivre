@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Paciente {{ $paciente->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/pacientes/' . $paciente->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Paciente"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/pacientes', $paciente->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Paciente',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $paciente->id }}</td>
                                    </tr>
                                    <tr><th> FichaCadastral </th><td> {{ $paciente->fichaCadastral }} </td></tr><tr><th> DataCadastro </th><td> {{ $paciente->dataCadastro }} </td></tr><tr><th> Nome </th><td> {{ $paciente->nome }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection