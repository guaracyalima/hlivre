@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Farmacium {{ $farmacium->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/farmacia/' . $farmacium->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Farmacium"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/farmacia', $farmacium->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Farmacium',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $farmacium->id }}</td>
                                    </tr>
                                    <tr><th> Departamento </th><td> {{ $farmacium->departamento }} </td></tr><tr><th> FarmaceuticoResponsavel </th><td> {{ $farmacium->farmaceuticoResponsavel }} </td></tr><tr><th> ResponsavelTecnico </th><td> {{ $farmacium->responsavelTecnico }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection