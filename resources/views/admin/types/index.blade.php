@extends('admin')


@section('title')
   Les Types de jeux
@stop

@section('content')
{{ Form::open(array('route' => 'type.store')) }}
    <div class="form-group">
        {{ Form::label('titre','Créer un type de jeu') }}
        {{ Form::text('titre', '',['class'=>'form-control','placeholder'=>'Titre']) }}
    </div>   

    @if ($errors-> has('titre'))
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->get('titre') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <button type="submit" class="btn btn-primary">Créer</button>
{{ Form::close() }}

<br/><br/>

    <div class="panel panel-default">
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Modification</th>
                            <th>Suppression</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lesTypes as $type)
                            <tr>
                                <td>{{ $type->titre }}</td>
                                <td>
                                   {{ Form::open(['route' => ['type.edit',$type["id"]], 'method' => 'get','role'=>'form'])}}
                                    {{ Form::submit('Modifier',['class'=>'btn btn-success']) }}
                                   {{ Form::close() }}
                                </td>                                
                                <td>
                                   {{ Form::open(['route' => ['type.destroy',$type["id"]], 'method' => 'delete','role'=>'form'])}}
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