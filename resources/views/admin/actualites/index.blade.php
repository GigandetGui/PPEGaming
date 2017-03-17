@extends('admin')


@section('title')
   Les actualités
@stop

@section('content')

{{Form::open(['url'=>'actualite\create','method' => 'get'])}}
<button class="btn btn-info">Créer une actualité</button>
{{Form::close()}}

<br/>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Date</th>
                            <th>Modification</th>
                            <th>Suppression</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lesActualites as $actualite)
                            <tr>
                                <td>{{ $actualite->titre }}</td>
                                <td>{{ $actualite->date }}</td>
                                <td>
                                   {{ Form::open(['route' => ['actualite.edit',$actualite["id"]], 'method' => 'get','role'=>'form'])}}
                                    {{ Form::submit('Modifier',['class'=>'btn btn-success']) }}
                                   {{ Form::close() }}
                                </td>                                
                                <td>
                                   {{ Form::open(['route' => ['actualite.destroy',$actualite["id"]], 'method' => 'delete','role'=>'form'])}}
                                   {{ Form::submit('Supprimer',['class'=>'btn btn-danger']) }}
                                   {{ Form::close() }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
@stop