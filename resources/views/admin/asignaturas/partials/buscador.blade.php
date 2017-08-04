{{ Form::model($request->only('nombre'), ['route' => 'asignaturas.index', 'method' => 'get', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) }}
<div class="form-group">
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la Asignatura']) !!}
</div>
{!! Form::submit('Buscar', ['class' => 'btn btn-default']) !!}
{{ Form::close() }}