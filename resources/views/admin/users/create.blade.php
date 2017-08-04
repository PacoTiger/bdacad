@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Nuevo usuario</div>

                    <div class="panel-body">
                        {!! Form::open(['route' => 'users.store']) !!}
                            @include('admin.users.partials.fields')
                            {!! Form::submit('Crear usuario', ['class' => 'btn btn-default']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection