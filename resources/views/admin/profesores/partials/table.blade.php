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
    @foreach($profesores as $profesor)
        <tr>
            <td>{{ $profesor->id }}</td>
            <td>{{ $profesor->nombre }}</td>
            <td>{{ $profesor->apellidos }}</td>
            <td>{{ $profesor->dni }}</td>
            <td>{{ $profesor->tfijo }}</td>
            <td>{{ $profesor->tmovil }}</td>
            <td><a href="#" class="btn btn-info">Mostrar</a></td>
            <td><a href="{{ route('profesores.edit', $profesor) }}" class="btn btn-info">Editar</a></td>
            <td></td>
        </tr>
    @endforeach
</table>