@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="user-list-title">Listado de Usuarios</h2>
    <a href="{{ route('usuarios.create') }}" class="btn btn-primary add-user-button">Agregar Usuario</a>

    <!-- Contenedor para el formulario de filtrado con margen inferior -->
    <div class="user-filter-container mb-3">
        <!-- Agrega tu formulario de filtro si es necesario -->
    </div>

    <!-- Agrega un margen superior a la tabla -->
    <table class="table user-table mt-3">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo Electrónico</th>
                <th>Rol</th>
                <th>Rut</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->Nombre }}</td>
                <td>{{ $user->Apellido }}</td>
                <td>{{ $user->CorreoElectronico }}</td>
                <td>{{ $user->tipoUsuario->Tipo }}</td>
                <td>{{ $user->Rut }}</td>
                <td>
                    <a href="{{ route('usuarios.edit', $user->UsuarioID) }}" class="btn btn-primary btn-sm user-edit">Editar</a>
                    <form action="{{ route('usuarios.destroy', $user->UsuarioID) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm user-delete" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
