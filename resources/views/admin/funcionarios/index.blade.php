@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Funcionarios</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/funcionarios/create') }}" class="btn btn-primary btn-xs" title="Add New Funcionario"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Fichacadastral </th><th> Dtcadastro </th><th> Cartaosus </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($funcionarios as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->fichacadastral }}</td><td>{{ $item->dtcadastro }}</td><td>{{ $item->cartaosus }}</td>
                                        <td>
                                            <a href="{{ url('/admin/funcionarios/' . $item->id) }}" class="btn btn-success btn-xs" title="View Funcionario"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/funcionarios/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Funcionario"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/funcionarios', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Funcionario" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Funcionario',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $funcionarios->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection