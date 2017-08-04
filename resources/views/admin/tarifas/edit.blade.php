@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar tarifa:  {{ $tarifa->id }}</div>

                    <div class="panel-body">
                        {!! Form::model($tarifa, ['route' => ['tarifas.update', $tarifa->id], 'method' => 'put']) !!}
                            @include('admin.tarifas.partials.fields')
                            {!! Form::submit('Modificar tarifa', ['class' => 'btn btn-default']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
                @include('admin.tarifas.partials.delete')
            </div>
        </div>
    </div>
@endsection