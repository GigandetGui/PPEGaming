@extends('admin')

@section('content')
<br/><br/>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Créer un compte utilisateur</div>
                <div class="panel-body">
                    {{Form::open(['route'=>'user.store'])}}
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="nom" class="col-md-4 control-label">Nom</label>

                            <div class="col-md-6">
                                {{ Form::text('name', '',['id'=>'name', 'class' =>'form-control','required']) }}

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div><div class="clearfix"></div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                {{ Form::email('email', '',['id'=>'email', 'class' =>'form-control','required']) }}

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('E-mail') }}</strong>
                                    </span>
                                @endif
                            </div><div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                             <label for="password" class="col-md-4 control-label">Statut de l'utilisateur</label>
                             <div class="col-md-6">
                             {{ Form::select('status',$status,'',['class'=>'form-control']) }}
                             </div><div class="clearfix"></div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Mot de passe</label>

                            <div class="col-md-6">
                                {{ Form::password('password',['id'=>'password', 'class' =>'form-control','required']) }}

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div><div class="clearfix"></div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmation mot de passe</label>

                            <div class="col-md-6">
                                {{ Form::password('password_confirmation',['id'=>'password_confirmation', 'class' =>'form-control','required']) }}

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4"><br/>
                               <center><button type="submit" class="btn btn-primary">
                                    Créer
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