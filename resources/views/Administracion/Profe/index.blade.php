@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="user-list-title">Listado de Material Educativo para Profesores</h2>

    <!-- Agrega cualquier encabezado o contenido específico para el index del profesor aquí -->

    <!-- Agrega un margen superior a la tabla -->
    <table class="table user-table mt-3">
        <thead>
            <tr>
                <th>MaterialID</th>
                <th>Tipo de Archivo</th>
                <th>Nombre de Archivo</th>
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
