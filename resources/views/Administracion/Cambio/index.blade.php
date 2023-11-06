@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="log-list-title">Registro de Cambios de Material Educativo</h2>

    <div class="log-filter-container mb-3">
        <!-- Formulario de filtros para facilitar la búsqueda -->
        <form method="GET" action="{{ route('cambios.index') }}" class="form-inline">
            @csrf

            <!-- Filtros de usuario -->
            <div class="form-group">
                <label for="usuario" class="log-filter-label">Filtrar por Usuario:</label>
                <div class="input-group">
                    <select class="form-control log-filter-select" id="usuario" name="usuario">
                        <option value="">Todos los Usuarios</option>
                        <option value="usuario1">Usuario 1</option>
                        <option value="usuario2">Usuario 2</option>
                        <!-- Agrega más opciones de usuarios según tus necesidades -->
                    </select>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Filtrar</button>
                    </div>
                </div>
            </div>

            <!-- Filtros de material educativo -->
            <div class="form-group">
                <label for="material_educativo" class="log-filter-label">Filtrar por Material Educativo:</label>
                <div class="input-group">
                    <select class="form-control log-filter-select" id="material_educativo" name="material_educativo">
                        <option value="">Todos los Materiales Educativos</option>
                        <option value="material1">Material Educativo 1</option>
                        <option value="material2">Material Educativo 2</option>
                        <!-- Agrega más opciones de material educativo según tus necesidades -->
                    </select>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Filtrar</button>
                    </div>
                </div>
            </div>

            <!-- Filtros de tipo de cambio -->
            <div class="form-group">
                <label for="tipo_cambio" class="log-filter-label">Filtrar por Tipo de Cambio:</label>
                <div class="input-group">
                    <select class="form-control log-filter-select" id="tipo_cambio" name="tipo_cambio">
                        <option value="">Todos los Tipos de Cambio</option>
                        <option value="cambio1">Cambio 1</option>
                        <option value="cambio2">Cambio 2</option>
                        <!-- Agrega más opciones de tipo de cambio según tus necesidades -->
                    </select>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Filtrar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <table class="table log-table mt-3">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Material Educativo</th>
                <th>Tipo de Cambio</th>
                <th>Fecha de Cambio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registrosCambio as $log)
                <tr>
                    <!-- Columna de usuario -->
                    <td>{{ $log->usuario->Nombre }} {{ $log->usuario->Apellido }} ({{ $log->usuario->TipoUsuario->Tipo }})</td>
                    <!-- Columna de material educativo -->
                    <td>{{ $log->material->NombreArchivo }} ({{ $log->material->Asignatura->Nombre }})</td>
                    <!-- Columna de tipo de cambio -->
                    <td>{{ $log->tipoCambio->TipoCambio }}</td>
                    <!-- Columna de fecha de cambio -->
                    <td>{{ $log->FechaCambio }}</td>
                    <!-- Columna de acciones -->
                    <td>
                        <a href="{{ route('cambios.edit', $log->LogID) }}" class="btn btn-primary btn-sm user-edit">Editar</a>
                        <button class="btn btn-danger btn-sm user-delete" onclick="confirm('¿Estás seguro de eliminar este registro de cambio?')">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
