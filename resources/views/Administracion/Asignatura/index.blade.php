@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="nivel-list-title">Listado de Asignaturas</h2>
    <a href="{{ route('asignaturas.create') }}" class="btn btn-primary add-nivel-button add-nivel-button--margin">Agregar Asignatura</a>

    <!-- Contenedor para el formulario de filtrado con margen inferior -->
    <div class="asignatura-filter-container mb-3">
        <div class="form-inline">
            <div class="form-group">
                <label for="curso" class="asignatura-filter-label">Filtrar por Curso:</label>
                <select name="curso" id="curso" class="form-control asignatura-filter-select">
                    <option value="">Todos</option>
                    <option value="Medio mayor">Medio mayor</option>
                    <option value="Otro Curso">Otro Curso</option>
                    <!-- Agrega más opciones de curso según tus necesidades -->
                </select>
            </div>
            
            <div class="form-group">
                <label for="nivel_educativo" class="asignatura-filter-label">Filtrar por Nivel Educativo:</label>
                <select name="nivel_educativo" id="nivel_educativo" class="form-control asignatura-filter-select">
                    <option value="">Todos</option>
                    <option value="1">Nivel 1</option>
                    <option value="2">Nivel 2</option>
                    <!-- Agrega más opciones de nivel educativo según tus necesidades -->
                </select>
            </div>
            <button type="submit" class="btn asignatura-filter-button">Filtrar</button>
        </div>
    </div>

    <!-- Agrega un margen superior a la tabla -->
    <table class="table nivel-table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Curso</th>
                <th>Nivel Educativo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Matemáticas</td>
                <td>Medio mayor</td>
                <td>1</td>
                <td>
                    <a href="{{ route('asignaturas.edit', 1) }}" class="btn btn-primary btn-sm user-edit">Editar</a>
                    <button class="btn btn-danger btn-sm user-delete" onclick="confirm('¿Estás seguro de eliminar esta asignatura?')">Eliminar</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Lenguaje</td>
                <td>Medio mayor</td>
                <td>1</td>
                <td>
                    <a href="{{ route('asignaturas.edit', 2) }}" class="btn btn-primary btn-sm user-edit">Editar</a>
                    <button class="btn btn-danger btn-sm user-delete" onclick="confirm('¿Estás seguro de eliminar esta asignatura?')">Eliminar</button>
                </td>
            </tr>
            <!-- Agrega más filas de asignaturas manualmente si es necesario -->
        </tbody>
    </table>
</div>
@endsection
