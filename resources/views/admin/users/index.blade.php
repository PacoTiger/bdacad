@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Usuarios</div>

                <div class="panel-body">
                    @include('admin.partials.mensaje')
                    <p>Hay {{ $users->total() }} usuarios</p>
                    <p><a class="btn btn-info" href="{{ route('users.create') }}" role="button">Crear nuevo usuario</a></p>
                    @include('admin.users.partials.table')
                    {{ $users->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection