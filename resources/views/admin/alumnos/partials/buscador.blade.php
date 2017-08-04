{{ Form::model($request->only('nombre'), ['route' => 'alumnos.index', 'method' => 'get', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) }}
    <div class="form-group">
        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del Alumno']) !!}
    </div>
    {!! Form::submit('Buscar', ['class' => 'btn btn-default']) !!}
{{ Form::close() }}