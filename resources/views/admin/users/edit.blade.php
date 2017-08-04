@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar usuario:  {{ $user->name . ' ' . $user->surname }}</div>

                    <div class="panel-body">
                        {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}
                            @include('admin.users.partials.fields')
                            {!! Form::submit('Modificar usuario', ['class' => 'btn btn-default']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
                @include('admin.users.partials.delete')
            </div>
        </div>
    </div>
@endsection