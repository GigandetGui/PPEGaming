@extends('admin')

@section('content')
<br/><br/>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modification du jeu {{ $unJeu->nom }}</div>
                <div class="panel-body">
                    {{Form::open(['route' => ['jeu.update', $unJeu->id], 'method'=>'put'])}}
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="nom" class="col-md-4 control-label">Nom</label>

                            <div class="col-md-6">
                                {{ Form::text('nom', $unJeu->nom,['id'=>'nom', 'class' =>'form-control','required']) }}
                            </div><div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                {{ Form::textarea('description', $unJeu->description,['id'=>'description', 'class' =>'form-control']) }}

                            </div><div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="nom" class="col-md-4 control-label">Date de sortie</label>

                            <div class="col-md-6">
                                {{ Form::text('date_sortie', $unJeu->date_sortie,array('id' => 'date_sortie', 'class'=>'form-control'))}}
                            </div><div class="clearfix"></div>
                        </div>
                                @if ($errors->has('date_sortie'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date_sortie') }}</strong>
                                    </span>
                                @endif

                         <div class="form-group">
                             <label for="password" class="col-md-4 control-label">Types de jeux</label>
                             <div class="col-md-6">
                             {{ Form::select('type',$lesTypes,'',['class'=>'form-control']) }}
                             </div><div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Logo</label>

                            <div class="col-md-6">
                                {{ Form::file('photo','',['id'=>'photo', 'class' =>'form-control']) }}

                            </div><div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4"><br/>
                               <center><button type="submit" class="btn btn-primary">
                                    Modifier
                                </button></center>
                            </div>
                        </div>
                   {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection