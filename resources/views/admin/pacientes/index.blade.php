@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pacientes</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/pacientes/create') }}" class="btn btn-primary btn-xs" title="Add New Paciente"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> FichaCadastral </th><th> DataCadastro </th><th> Nome </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pacientes as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->fichaCadastral }}</td><td>{{ $item->dataCadastro }}</td><td>{{ $item->nome }}</td>
                                        <td>
                                            <a href="{{ url('/admin/pacientes/' . $item->id) }}" class="btn btn-success btn-xs" title="View Paciente"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/pacientes/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Paciente"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/pacientes', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Paciente" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Paciente',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $pacientes->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection