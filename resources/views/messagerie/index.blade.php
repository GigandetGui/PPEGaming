@extends('default')

@section('content')

<div class="clearfix"></div>
<br/><br/>


<div class="row">
<div class="container text-center">
 {{ Form::open(['url' => '/envoyer', 'method' => 'post']) }}
   <div class="form-group col-sm-12 col-md-4 col-md-offset-3">
    <label for="nomUtilisateur">Nom d'utilisateur</label>
      {{ Form::text('nomUtilisateur', '',['id'=>'nomUtilisateur', 'class' =>'form-control']) }}
  </div>
  <div class="form-group col-sm-12 col-md-4 col-md-offset-3">
    <label for="nom">Sujet</label>
      {{ Form::text('sujet', '',['id'=>'sujet', 'class' =>'form-control']) }}
  </div><div class="clearfix"></div>

    <div class="form-group col-sm-12 col-md-12 col-md-offset-1">
      {{ Form::textarea('mess', '',['class'=>'form-control', 'placeholder'=>'Votre message...']) }}

  </div>
</div>

<center>
<button type="submit" class="btn btn-info">Envoyer</button>
</center>
<br/>
{{ Form::close() }}

</div>

@stop