@extends('admin')

@section('content')
<br/><br/>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modification du type {{ $unType->titre }}</div>
                <div class="panel-body">
                    {{Form::open(['route' => ['type.update', $unType->id], 'method'=>'put'])}}
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="nom" class="col-md-4 control-label">Titre</label>

                            <div class="col-md-6">
                                {{ Form::text('titre', $unType->titre,['id'=>'titre', 'class' =>'form-control','required']) }}
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

@stop