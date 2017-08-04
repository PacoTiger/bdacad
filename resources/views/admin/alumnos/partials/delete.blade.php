{{ Form::open(['route' => ['alumnos.destroy', $alumno], 'method' => 'delete']) }}
    {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
{{ Form::close() }}