@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="user-list-title">Listado de Material Educativo</h2>

    <a href="{{ route('materiales.create') }}" class="btn btn-primary add-user-button add-user-button--margin">Agregar Material Educativo</a>

    <!-- Contenedor para el formulario de filtrado con margen inferior -->
    <div class="user-filter-container mb-3">
        <form method="GET" action="{{ route('materiales.index') }}" class="form-inline">
            @csrf

            <!-- Agrega tus campos de filtro según sea necesario -->

            <button type="submit" class="btn btn-primary user-filter-button">Filtrar</button>
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
                        @if ($material->usuario)
                            {{ $material->usuario->Nombre }} {{ $material->usuario->Apellido }}
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
