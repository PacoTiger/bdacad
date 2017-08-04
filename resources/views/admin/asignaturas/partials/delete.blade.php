{{ Form::open(['route'=> ['asignaturas.destroy', $asignatura], 'method' => 'delete']) }}
    {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
{{ Form::close() }}