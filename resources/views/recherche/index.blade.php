@extends('default')
@section('content')
<br/><br/><br/>
<div>
<div class="cadre">
<h4>Rechercher un joueur</h4><br/>
<div class="form-group">
<input type="search" class="form-control" value="Recherche">
</div>
<center><button type="submit" class="btn btn-info">Rechercher</button></center>
</div>
<div class="cadre">
<h4>Choisir un jeu</h4><br/>
@foreach($lesJeux as $jeux)
<li><input type="checkbox">  {{ $jeux->nom }}</li>
@endforeach
<br/>
<center><input class="btn btn-info" type="submit" value="Filtrer"></center>
</div>

<div class="container">
<div class="jeux">
@foreach($lesUtilisateurs as $utilisateur)
<div class="contenujeux">
<center><h3>{{$utilisateur->name}}</h3></center>

</div>
<br/>
@endforeach


</div>
</div>
</div>
@stop