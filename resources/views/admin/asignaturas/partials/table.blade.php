<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Activo</th>
        <th>Tarifa</th>
        <th>Centro_id</th>
        <th>Mostrar</th>
        <th>Editar</th>
        <th>Borrar</th>
    </tr>
    @foreach($asignaturas as $asignatura)
        <tr>
            <th>{{ $asignatura->id }}</th>
            <th>{{ $asignatura->nombre }}</th>
            <th>{{ $asignatura->activo }}</th>
            <th>{{ $asignatura->nivel_tarifa }}</th>
            <th>{{ $asignatura->centro_id }}</th>
            <th><a href="{{ route('asignaturas.show', $asignatura) }}" class="btn btn-info">Mostrar</a></th>
            <th><a href="{{ route('asignaturas.edit', $asignatura) }}" class="btn btn-info">Editar</a></th>
            <th>@include('admin.asignaturas.partials.delete')</th>
        </tr>
    @endforeach
</table>