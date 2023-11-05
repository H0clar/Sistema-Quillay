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
                <th>Asignatura</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->Nombre }}</td>
                <td>{{ $usuario->Apellido }}</td>
                <td>{{ $usuario->CorreoElectronico }}</td>
                <td>{{ $usuario->tipoUsuario->Tipo }}</td>
                <td>
                    @if ($usuario->asignatura)
                        {{ $usuario->asignatura->Nombre }}
                    @else
                        N/A
                    @endif
                </td>
                <td>
                    <a href="{{ route('usuarios.edit', $usuario->UsuarioID) }}" class="btn btn-primary btn-sm user-edit">Editar</a>
                    <form action="{{ route('usuarios.destroy', $usuario->UsuarioID) }}" method="POST" style="display: inline;">
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
