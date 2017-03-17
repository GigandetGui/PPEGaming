@extends('admin')

@section('title')
    Créer un type de jeu
@stop

@section('content')



{{ Form::open(array('route' => 'type.store')) }}
    <div class="form-group">
        {{ Form::label('titre','Titre') }}
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
@stop