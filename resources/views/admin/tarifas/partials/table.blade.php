<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>Nivel</th>
        <th>Horas</th>
        <th>Precio</th>
        <th>Activo</th>
        <th>Editar</th>
        <th>Borrar</th>
    </tr>
    @foreach($tarifas as $tarifa)
        <tr>
            <th>{{ $tarifa->id }}</th>
            <th>{{ $tarifa->nivel }}</th>
            <th>{{ $tarifa->horas }}</th>
            <th>{{ $tarifa->precio }}</th>
            <th>{{ $tarifa->activo }}</th>
            <th><a href="{{ route('tarifas.edit', $tarifa) }}" class="btn btn-info">Editar</a></th>
            <th>@include('admin.tarifas.partials.delete')</th>
        </tr>
    @endforeach
</table>