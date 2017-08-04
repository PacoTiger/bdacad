@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Asignatura: {{ $asignatura->nombre }}</div>
                    <div class="panel-body">
                        {{ Form::model($asignatura, ['route' => ['asignaturas.update', $asignatura->id], 'method' => 'put']) }}
                            @include('admin.asignaturas.partials.fields')
                            {!! Form::submit('Modificar Asignatura', ['class' => 'btn btn-default']) !!}
                        {{ Form::close() }}
                    </div>
                </div>
                @include('admin.asignaturas.partials.delete')
            </div>
        </div>
    </div>
@endsection