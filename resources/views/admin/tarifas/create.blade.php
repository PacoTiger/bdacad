@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Nueva tarifa</div>

                    <div class="panel-body">
                        {!! Form::open(['route' => 'tarifas.store']) !!}
                            @include('admin.tarifas.partials.fields')
                            {!! Form::submit('Crear tarifa', ['class' => 'btn btn-default']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection