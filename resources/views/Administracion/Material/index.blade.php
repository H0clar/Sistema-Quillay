@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="user-list-title">Listado de Material Educativo</h2>

    <a href="{{ route('materiales.create') }}" class="btn btn-primary add-user-button add-user-button--margin">Agregar Material Educativo</a>

    <!-- Contenedor para el formulario de filtrado con margen inferior -->
    <div class="user-filter-container mb-3">
        <form method="GET" action="{{ route('materiales.index') }}" class="form-inline">
            @csrf




            <div class="form-group ml-2">
                <label for="tipoArchivo" class="log-filter-label">Filtrar por Tipo de Archivo:</label>
                <div class="input-group">
                    <select class="form-control log-filter-select" id="tipoArchivo" name="tipoArchivo">
                        <option value="" {{ !$tipoArchivoFilter ? 'selected' : '' }}>Todos los Tipos de Archivo</option>
                        @foreach($tiposArchivo as $tipo)
                            <option value="{{ $tipo->Tipo }}" {{ $tipoArchivoFilter == $tipo->Tipo ? 'selected' : '' }}>
                                {{ $tipo->Tipo }}
                            </option>
                        @endforeach

                    </select>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Filtrar</button>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="usuario" class="log-filter-label">Filtrar por Usuario:</label>
                <div class="input-group">
                    <select class="form-control log-filter-select" id="usuario" name="usuario">
                        <option value="" {{ !$usuarioFilter ? 'selected' : '' }}>Todos los Usuarios</option>
                        @foreach($users as $user)
                            <option value="{{ $user->UsuarioID }}" {{ $usuarioFilter == $user->UsuarioID ? 'selected' : '' }}>
                                {{ $user->Nombre }} {{ $user->Apellido }}
                            </option>
                        @endforeach
                    </select>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Filtrar</button>
                    </div>
                </div>
            </div>

            <div class="form-group ml-2">
                <label for="nivelEducativo" class="log-filter-label">Filtrar por Nivel Educativo:</label>
                <div class="input-group">
                    <select class="form-control log-filter-select" id="nivelEducativo" name="nivelEducativo">
                        <option value="" {{ !$nivelEducativoFilter ? 'selected' : '' }}>Todos los Niveles Educativos</option>
                        @foreach($nivelesEducativos as $nivel)
                            <option value="{{ $nivel->NivelEducativoID }}" {{ $nivelEducativoFilter == $nivel->NivelEducativoID ? 'selected' : '' }}>
                                {{ $nivel->Nombre }}
                            </option>
                        @endforeach
                    </select>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Filtrar</button>
                    </div>
                </div>
            </div>

            <div class="form-group ml-2">
                <label for="curso" class="log-filter-label">Filtrar por Curso:</label>
                <div class="input-group">
                    <select class="form-control log-filter-select" id="curso" name="curso">
                        <option value="" {{ !$cursoFilter ? 'selected' : '' }}>Todos los Cursos</option>
                        @foreach($cursos as $curso)
                            <option value="{{ $curso->CursoID }}" {{ $cursoFilter == $curso->CursoID ? 'selected' : '' }}>
                                {{ $curso->Nombre }}
                            </option>
                        @endforeach
                    </select>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Filtrar</button>
                    </div>
                </div>
            </div>
            
            


            <div class="form-group ml-2">
                <label for="asignatura" class="log-filter-label">Filtrar por Asignatura:</label>
                <div class="input-group">
                    <select class="form-control log-filter-select" id="asignatura" name="asignatura">
                        <option value="" {{ !$asignaturaFilter ? 'selected' : '' }}>Todas las Asignaturas</option>
                        @foreach($asignaturas as $asignatura)
                            <option value="{{ $asignatura->AsignaturaID }}" {{ $asignaturaFilter == $asignatura->AsignaturaID ? 'selected' : '' }}>
                                {{ $asignatura->Nombre }}
                            </option>
                        @endforeach
                    </select>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Filtrar</button>
                    </div>
                </div>
            </div>

            <div class="form-group ml-2">
                <label for="fecha" class="log-filter-label">Filtrar por Fecha:</label>
                <div class="input-group">
                    <input type="date" class="form-control" id="fecha" name="fecha" value="{{ $fechaFilter }}">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Filtrar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Agrega un margen superior a la tabla -->
    <table class="table user-table mt-3">
        <thead>
            <tr>
                <th>MaterialID</th>
                <th>Tipo de Archivo</th>
                <th>Nombre de Archivo</th>
                <th>Usuario</th>
                <th>Asignatura</th>
                <th>Curso</th>
                <th>Nivel Educativo</th>
                <th>Estado</th>
                <th>Ruta Google Drive</th>
                <th>Fecha de Subida</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($materiales as $material)
                <tr>
                    <td>{{ $material->MaterialID }}</td>
                    <td>{{ $material->tipoArchivo->Tipo }}</td>
                    <td>{{ $material->NombreArchivo }}</td>
                    <td>
                        @if ($material->user)
                            {{ $material->user->Nombre }} {{ $material->user->Apellido }}
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        @if ($material->asignatura)
                            {{ $material->asignatura->Nombre }}
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        @if ($material->curso)
                            {{ $material->curso->Nombre }}
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        @if ($material->nivelEducativo)
                            {{ $material->nivelEducativo->Nombre }}
                        @else
                            N/A
                        @endif
                    </td>
                    <td>{{ $material->Estado ? 'Activo' : 'Inactivo' }}</td>
                    <td>{{ $material->RutaGoogleDrive }}</td>
                    <td>{{ $material->FechaSubida }}</td>
                    <td>
                        <a href="{{ route('materiales.edit', $material->MaterialID) }}" class="btn btn-primary btn-sm user-edit">Editar</a>
                        <form method="POST" action="{{ route('materiales.destroy', $material->MaterialID) }}" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm user-delete" onclick="return confirm('¿Estás seguro de eliminar este material educativo?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
