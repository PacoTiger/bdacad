@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Profesores</div>

                    <div class="panel-body">

                        @include('admin.partials.mensaje')
                        <p>Hay {{ $profesores->total() }} Profesores</p>
                        <p><a class="btn btn-info" href="{{ route('profesores.create') }}" role="button">Crear Profesor</a></p>
                        @include('admin.profesores.partials.table')
                        {{ $profesores->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection