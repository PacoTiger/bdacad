@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Alumno: {{ $alumno->nombre . ' ' . $alumno->apellidos }}</div>

                    <div class="panel-body">
                        {{ Form::model($alumno, ['route' => ['alumnos.update', $alumno->id], 'method' => 'put']) }}
                            @include('admin.alumnos.partials.fields')
                            {!! Form::submit('Modificar Alumno', ['class' => 'btn btn-default']) !!}
                        {{ Form::close() }}
                    </div>
                </div>
                @include('admin.alumnos.partials.delete')
            </div>
        </div>
    </div>
@endsection