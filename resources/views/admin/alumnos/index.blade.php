@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Alumnos</div>

                <div class="panel-body">
                    @include('admin.alumnos.partials.buscador')
                    @include('admin.partials.mensaje')
                    <p>Hay {{ $alumnos->total() }} Alumnos</p>
                    <p><a class="btn btn-info" href="{{ route('alumnos.create') }}" role="button">Crear Alumno</a></p>
                    @include('admin.alumnos.partials.table')
                    {{ $alumnos->appends($request->only('nombre'))->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection