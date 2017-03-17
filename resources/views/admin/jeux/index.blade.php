@extends('admin')


@section('title')
   Les jeux
@stop

@section('content')

{{Form::open(['url'=>'jeu\create','method' => 'get'])}}
<button class="btn btn-info">Créer un jeu</button>
{{Form::close()}}

<br/>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Date de sortie</th>
                            <th>Types</th>
                            <th>Modification</th>
                            <th>Suppression</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lesJeux as $jeu)
                            <tr>
                                <td>{{ $jeu->nom }}</td>
                                <td>{{ $jeu->date_sortie }}</td>
                                <td></td>
                                <td>
                                   {{ Form::open(['route' => ['jeu.edit',$jeu["id"]], 'method' => 'get','role'=>'form'])}}
                                    {{ Form::submit('Modifier',['class'=>'btn btn-success']) }}
                                   {{ Form::close() }}
                                </td>                                
                                <td>
                                   {{ Form::open(['route' => ['jeu.destroy',$jeu["id"]], 'method' => 'delete','role'=>'form'])}}
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