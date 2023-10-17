@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="user-list-title">Listado de Usuarios</h2>
    <a href="{{ route('usuarios.create') }}" class="btn btn-primary add-user-button">Agregar Usuario</a>


    <!-- Contenedor para el formulario de filtrado con margen inferior -->
    <div class="user-filter-container mb-3">
        <div class="form-inline">
            <div class="form-group">
                <label for="rol" class="user-filter-label">Filtrar por Rol:</label>
                <select name="rol" id="rol" class="form-control user-filter-select">
                    <option value="">Todos</option>
                    <option value="Usuario">Usuario</option>
                    <option value="Administrador">Administrador</option>
                </select>
                <button type="submit" class="btn user-filter-button">Filtrar</button>
            </div>

            <div class="form-group">
                <label for="nombre" class="user-filter-label">Buscar por Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control user-filter-input">
                <button type="submit" class="btn user-filter-button">Buscar</button>
            </div>
        </div>
    </div>

    <!-- Agrega un margen superior a la tabla -->
    <table class="table user-table mt-3">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo Electrónico</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí puedes agregar filas manualmente si es necesario -->
            <tr>
                <td>Usuario 1</td>
                <td>Apellido 1</td>
                <td>usuario1@example.com</td>
                <td>Usuario</td>
                <td>
                    <a href="{{ route('usuarios.edit', 1) }}" class="btn btn-primary btn-sm user-edit">Editar</a>
                    <button class="btn btn-danger btn-sm user-delete" onclick="confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</button>
                </td>
            </tr>
            <tr>
                <td>Usuario 2</td>
                <td>Apellido 2</td>
                <td>usuario2@example.com</td>
                <td>Administrador</td>
                <td>
                    <a href="{{ route('usuarios.edit', 2) }}" class="btn btn-primary btn-sm user-edit">Editar</a>
                    <button class="btn btn-danger btn-sm user-delete" onclick="confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</button>
                </td>
            </tr>
            <!-- Agrega más filas de usuarios manualmente si es necesario -->
        </tbody>
    </table>
</div>
@endsection
