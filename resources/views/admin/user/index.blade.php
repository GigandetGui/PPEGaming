@extends('admin')


@section('title')
   Liste des utilisateurs
@stop



@if (Session::has('success'))
    @section('success')
        {{ Session::get('success') }}
    @stop
@endif



@section('content')

{{Form::open(['url'=>'user\create','method' => 'get'])}}
<button class="btn btn-info">Créer un utilisateur</button>
{{Form::close()}}
<br/>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Statut</th>
                            <th>Modifier statut</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lesUsers as $users)
                            <tr>
                                <td>{{ $users->name }}</td>
                                <td>{{ $users->email }}</td>
                                <td>  {{ Form::open(['route' => ['user.edit',$users["id"]], 'method' => 'get','role'=>'form'])}}
                                        {{ Form::select('status',$status,$users->status_id,['class'=>'form-control']) }}</td>
                                <td>
                                    {{ Form::submit('Editer',['class'=>'btn btn-success']) }}
                                   {{ Form::close() }}
                                </td>
                                <td>
                                   {{ Form::open(['route' => ['user.destroy',$users["id"]], 'method' => 'delete','role'=>'form'])}}
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