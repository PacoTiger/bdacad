{{ Form::open(['route' => ['users.destroy', $user], 'method' => 'delete']) }}
    {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
{{ Form::close() }}