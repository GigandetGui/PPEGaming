@extends('admin')

@section('content')
<br/><br/>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modification de l'actualité {{ $uneActualite->titre }}</div>
                <div class="panel-body">
                    {{Form::open(['route' => ['actualite.update', $uneActualite->id], 'method'=>'put'])}}
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="nom" class="col-md-4 control-label">Titre</label>

                            <div class="col-md-6">
                                {{ Form::text('titre', $uneActualite->titre,['id'=>'titre', 'class' =>'form-control','required']) }}
                            </div><div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                {{ Form::textarea('description', $uneActualite->description,['id'=>'description', 'class' =>'form-control']) }}

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