{{ Form::open(['route' => ['tarifas.destroy', $tarifa], 'method' => 'delete']) }}
    {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
{{ Form::close() }}