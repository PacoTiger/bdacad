@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel-heading">Nuevo Alumno</div>

                <div class="panel-body">
                    {{ Form::open(['route' => 'alumnos.store']) }}
                        @include('admin.alumnos.partials.fields')
                        {!! Form::submit('Crear alumno', ['class' => 'btn btn-default']) !!}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>


@endsection