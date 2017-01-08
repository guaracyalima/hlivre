@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">Farmacia</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/farmacia/create') }}" class="btn btn-primary btn-xs" title="Adicionar nova farmacia"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Departamento </th><th> FarmaceuticoResponsavel </th><th> ResponsavelTecnico </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($farmacia as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->departamento }}</td><td>{{ $item->farmaceuticoResponsavel }}</td><td>{{ $item->responsavelTecnico }}</td>
                                        <td>
                                            <a href="{{ url('/admin/farmacia/' . $item->id) }}" class="btn btn-success btn-xs" title="View Farmacium"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/farmacia/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Farmacium"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/farmacia', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Farmacium" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Farmacium',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $farmacia->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection