@extends('default')
@section('content')
<br/><br/><br/>
<div>
<div class="cadre">
<h4>Rechercher un jeu</h4><br/>
<div class="form-group">
<input type="search" class="form-control" value="Recherche">
</div>
<center><button type="submit" class="btn btn-info">Rechercher</button></center>
</div>
<div class="cadre">
<h4>Les catégories de jeux</h4><br/>
@foreach($lesTypes as $type)
<li><input type="checkbox">  {{ $type->titre }}</li>
@endforeach
<br/>
<center><input class="btn btn-info" type="submit" value="Filtrer"></center>
</div>

<div class="container">
<div class="jeux">
@foreach($lesJeux as $jeu)
<div class="contenujeux">
<center><h3>{{$jeu->nom}}</h3></center>
<div style="float:right">Date de sortie : {{ $jeu->date_sortie}}</div>
<img src="{{ asset('images/logo_jeux/').'/'.$jeu->photo }}" height="250" width="300">
<p>{{$jeu->description}}</p>



</div>
<br/>
@endforeach


</div>
</div>
</div>
@stop