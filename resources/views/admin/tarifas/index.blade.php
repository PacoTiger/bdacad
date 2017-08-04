@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Tarifas</div>

                    <div class="panel-body">
                        @include('admin.partials.mensaje')
                        <p>Hay {{ $tarifas->total() }} tarifas</p>
                        <p><a class="btn btn-info" href="{{ route('tarifas.create') }}" role="button">Crear nueva tarifa</a></p>
                        @include('admin.tarifas.partials.table')
                        {{ $tarifas->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection