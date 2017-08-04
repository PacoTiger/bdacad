@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Asignaturas</div>
                    <div class="panel-body">
                        @include('admin.asignaturas.partials.buscador')
                        @include('admin.partials.mensaje')
                        <p>Hay {{ $asignaturas->total() }} asignaturas</p>
                        <p><a class="btn btn-info" href="{{ route('asignaturas.create') }}" role="button">Crear Asignatura</a></p>
                        @include('admin.asignaturas.partials.table')
                        {{ $asignaturas->appends($request->only('nombre'))->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection