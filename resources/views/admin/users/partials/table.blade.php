<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Nick</th>
        <th>Email</th>
        <th>Editar</th>
        <th>Borrar</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <th>{{ $user->id }}</th>
            <th>{{ $user->name }}</th>
            <th>{{ $user->surname }}</th>
            <th>{{ $user->nickname }}</th>
            <th>{{ $user->email }}</th>
            <th><a href="{{ route('users.edit', $user) }}" class="btn btn-info">Editar</a></th>
            <th>@include('admin.users.partials.delete')</th>
        </tr>
    @endforeach
</table>