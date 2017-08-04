@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel-heading">Nueva Asignatura</div>

                <div class="panel-body">
                    {{ Form::open(['route' => 'asignaturas.store']) }}
                        @include('admin.asignaturas.partials.fields')
                        {!! Form::submit('Crear Asignatura', ['class' => 'btn btn-default']) !!}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection