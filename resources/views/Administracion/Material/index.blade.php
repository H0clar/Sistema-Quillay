@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="material-list-title">Listado de Material Educativo</h2>
    

    <a href="{{ route('materiales.create') }}" class="btn btn-primary add-nivel-button add-nivel-button--margin">Agregar Material Educativo</a>

    <!-- Contenedor para el formulario de filtrado con margen inferior -->
    <div class="material-filter-container mb-3">
        <form method="GET" action="{{ route('materiales.index') }}" class="form-inline">
            @csrf

            <div class="form-group mr-2" style="margin-left: 50px;">
                <label for="nombre" class="material-filter-label">Nombre del Archivo:</label>
                <div class="input-group">
                    <input type="text" class="form-control material-filter-select" id="nombre" name="nombre">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Filtrar</button>
                    </div>
                </div>
            </div>

            <div class="form-group mr-2" style="margin-left: 50px;">
                <label for="asignatura" class="material-filter-label">Asignatura:</label>
                <div class="input-group">
                    <select name="asignatura" id="asignatura" class="form-control material-filter-select">
                        <option value="">Todas</option>
                        <option value="Matemáticas">Matemáticas</option>
                        <option value="Lenguaje">Lenguaje</option>
                        <!-- Agrega más opciones de asignaturas según tus necesidades -->
                    </select>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Filtrar</button>
                    </div>
                </div>
            </div>

            <div class="form-group mr-2" style="margin-left: 50px;">
                <label for="curso" class="material-filter-label">Curso:</label>
                <div class="input-group">
                    <input type="text" class="form-control material-filter-select" id="curso" name="curso">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Filtrar</button>
                    </div>
                </div>
            </div>

            <div class="form-group mr-2" style="margin-left: 50px;">
                <label for="nivel_educativo" class="material-filter-label">Nivel Educativo:</label>
                <div class="input-group">
                    <input type="text" class="form-control material-filter-select" id="nivel_educativo" name="nivel_educativo">
                    <div class "input-group-append">
                        <button type="submit" class="btn btn-primary">Filtrar</button>
                    </div>
                </div>
            </div>

            <div class="form-group mr-2" style="margin-left: 50px;">
                <label for "profesor" class="material-filter-label">Profesor:</label>
                <div class="input-group">
                    <select name="profesor" id="profesor" class="form-control material-filter-select">
                        <option value="">Todos</option>
                        <option value="Profesor 1">Profesor 1</option>
                        <option value="Profesor 2">Profesor 2</option>
                        <!-- Agrega más opciones de profesores según tus necesidades -->
                    </select>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Filtrar</button>
                    </div>
                </div>
            </div>

            <div class="form-group mr-2" style="margin-left: 50px;">
                <label for="estado" class="material-filter-label">Estado:</label>
                <div class="input-group">
                    <select name="estado" id="estado" class="form-control material-filter-select">
                        <option value="">Todos</option>
                        <option value="Activo">Activo</option>
                        <option value="No Activo">No Activo</option>
                    </select>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Filtrar</button>
                    </div>
                </div>
            </div>

            <div class="form-group mr-2" style="margin-left: 50px;">
                <label for="fecha_subida" class="material-filter-label">Fecha de Subida:</label>
                <div class="input-group">
                    <input type="date" class="form-control material-filter-select" id="fecha_subida" name="fecha_subida">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Filtrar</button>
                    </div>
                </div>
            </div>

            
        </form>
    </div>

    <!-- Agrega un margen superior a la tabla -->
<table class="table material-table mt-3">
    <thead>
        <tr>
            <th>Nombre del Archivo</th>
            <th>Asignatura</th>
            <th>Curso</th>
            <th>Nivel Educativo</th>
            <th>Profesor</th>
            <th>Estado</th>
            <th>Fecha de Subida</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Material 1</td>
            <td>Matemáticas</td>
            <td>Medio mayor</td>
            <td>1</td>
            <td>Profesor 1</td>
            <td>Activo</td>
            <td>01/01/2021</td>
            <td>
                
                <form action="{{ route('materiales.destroy', 1) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm user-delete" onclick="confirm('¿Estás seguro de eliminar este curso?')">Eliminar</button>
                </form>
            </td>
        </tr>
        <tr>
            <td>Material 2</td>
            <td>Lenguaje</td>
            <td>Medio mayor</td>
            <td>1</td>
            <td>Profesor 2</td>
            <td>No Activo</td>
            <td>02/01/2021</td>
            <td>
                
                <form action="{{ route('materiales.destroy', 2) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm user-delete" onclick="confirm('¿Estás seguro de eliminar este curso?')">Eliminar</button>
                </form>
            </td>
        </tr>
        <!-- Agrega más filas de material educativo manualmente si es necesario -->
    </tbody>
</table>

</div>

@endsection
