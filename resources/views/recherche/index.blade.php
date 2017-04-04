@extends('default')
@section('content')
<br/><br/><br/>
<div class="filtre">
<div class="cadre">
    <h4>Choisir un jeu</h4><br/>
        @foreach($lesJeux as $jeu)
            <li><input type="checkbox">  {{ $jeu->nom }}</li>
        @endforeach
<br/>
{{ Form::open(array('route' => 'recherche.recherche')) }}

    <center><input class="btn btn-info" type="submit" value="Filtrer"></center>
{{ Form::close() }}
</div>
</div>

<div class="container">
<div class="utilisateur">
                         <div class="table-responsive">
                <table class="table table-hover" id="table-jeu">
                    <thead>
                        <tr>
                            <th>Pseudo</th>
                            <th>Jeu préféré</th>
                            <th>Actif</th>
                            <th>Messagerie</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lesUtilisateurs as $utilisateur)
                            <tr>
                                <td>{{ $utilisateur["name"] }}</td>
                                <td>{{ $jeu["nom"] }}</td>
                                <td> @if ($utilisateur->actif==1)
                                <div class="glyphicon glyphicon-ok">
                                    @else ($utilisateur->actif==0)
                                <div class="glyphicon glyphicon-remove">    
                                    @endif
                                </td>
                                <td> 
                                    {{ Form::open(['route' => ['recherche.envoyerMessage',$utilisateur["id"]], 'method' => 'get','role'=>'form'])}}
                                    {{ Form::submit('Envoyer un message',['class'=>'btn btn-primary']) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

</div>
<br/>



</div>
</div>
@stop