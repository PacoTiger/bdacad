<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>DNI</th>
        <th>Fijo</th>
        <th>Movil</th>
        <th>Mostrar</th>
        <th>Editar</th>
        <th>Borrar</th>
    </tr>
    @foreach($alumnos as $alumno)
        <tr>
            <td>{{ $alumno->id }}</td>
            <td>{{ $alumno->nombre }}</td>
            <td>{{ $alumno->apellidos }}</td>
            <td>{{ $alumno->dni }}</td>
            <td>{{ $alumno->tfijo }}</td>
            <td>{{ $alumno->tmovil }}</td>
            <td><a href="{{ route('alumnos.show', $alumno) }}" class="btn btn-info">Mostrar</a></td>
            <td><a href="{{ route('alumnos.edit', $alumno) }}" class="btn btn-info">Editar</a></td>
            <td>@include('admin.alumnos.partials.delete')</td>
        </tr>
    @endforeach
</table>