@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="course-list-title">Listado de Cursos</h2>

    <a href="{{ route('cursos.create') }}" class="btn btn-primary add-nivel-button add-nivel-button--margin">Agregar Nivel Educativo</a>

    <!-- Agregar el formulario de filtrado por nivel educativo con los mismos estilos -->
    <div class="form-inline course-filter-container mb-3">
        <div class="form-group">
            <label for="nivel_educativo" class="user-filter-label">Filtrar por Nivel Educativo:</label>
            <select name="nivel_educativo" id="nivel_educativo" class="form-control user-filter-select">
                <option value="">Todos</option>
                <option value="1">Nivel 1</option>
                <option value="2">Nivel 2</option>
                <!-- Agrega más opciones de niveles educativos según tu base de datos -->
            </select>
            <button type="submit" class="btn user-filter-button">Filtrar</button>
        </div>
    </div>

    <table class="table course-table mt-3">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Abreviatura</th>
                <th>Nivel Educativo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Medio mayor</td>
                <td>MM</td>
                <td>1</td>
                <td>
                    <a href="{{ route('cursos.edit', 1) }}" class="btn btn-primary btn-sm user-edit">Editar</a>
                    <button class="btn btn-danger btn-sm user-delete" onclick="confirm('¿Estás seguro de eliminar este curso?')">Eliminar</button>
                </td>
            </tr>
            <tr>
                <td>Primer nivel de transición (prekinder)</td>
                <td>NT1</td>
                <td>1</td>
                <td>
                    <a href="{{ route('cursos.edit', 2) }}" class="btn btn-primary btn-sm user-edit">Editar</a>
                    <button class="btn btn-danger btn-sm user-delete" onclick="confirm('¿Estás seguro de eliminar este curso?')">Eliminar</button>
                </td>
            </tr>

            <tr>
                <td>Segundo nivel de transición</td>
                <td>NT2</td>
                <td>1</td>
                <td>
                    <a href="{{ route('cursos.edit', 3) }}" class="btn btn-primary btn-sm user-edit">Editar</a>
                    <button class="btn btn-danger btn-sm user-delete" onclick="confirm('¿Estás seguro de eliminar este curso?')">Eliminar</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
