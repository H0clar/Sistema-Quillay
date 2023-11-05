@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="log-list-title">Registro de Cambios de Material Educativo</h2>

    <div class="log-filter-container mb-3" style="margin-left: 20px;">
        <form method="GET" action="{{ route('cambios.index') }}" class="form-inline">
            @csrf

            <div class="form-group" style="margin-left: 50px;">
                <label for="usuario" class="log-filter-label">Usuario:</label>
                <div class="input-group">
                    <select class="form-control log-filter-select" id="usuario" name="usuario">
                        <option value="">Filtrar</option>
                        <option value="usuario1">Usuario 1</option>
                        <option value="usuario2">Usuario 2</option>
                        <!-- Agrega más opciones de usuarios según tus necesidades -->
                    </select>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Filtrar</button>
                    </div>
                </div>
            </div>

            <div class="form-group" style="margin-left: 50px;">
                <label for="material_educativo" class="log-filter-label">Material Educativo:</label>
                <div class="input-group">
                    <select class="form-control log-filter-select" id="material_educativo" name="material_educativo">
                        <option value="">Filtrar</option>
                        <option value="material1">Material Educativo 1</option>
                        <option value="material2">Material Educativo 2</option>
                        <!-- Agrega más opciones de material educativo según tus necesidades -->
                    </select>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Filtrar</button>
                    </div>
                </div>
            </div>

            <div class="form-group" style="margin-left: 50px;">
                <label for="tipo_cambio" class="log-filter-label">Tipo de Cambio:</label>
                <div class="input-group">
                    <select class="form-control log-filter-select" id="tipo_cambio" name="tipo_cambio">
                        <option value="">Filtrar</option>
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
            </tr>
        </thead>
        <tbody>
            @foreach($registrosCambio as $log)
                <tr>
                    <td>{{ $log->usuario->Nombre }} {{ $log->usuario->Apellido }}</td> <!-- Muestra el nombre y apellido del usuario -->
                    <td>{{ $log->material->NombreArchivo }} ({{ $log->material->TipoArchivo }})</td> <!-- Muestra el nombre del material educativo y su tipo -->
                    <td>{{ $log->tipoCambio->TipoCambio }}</td> <!-- Muestra el tipo de cambio -->
                    <td>{{ $log->FechaCambio }}</td> <!-- Muestra la FechaCambio del registro de log -->

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
