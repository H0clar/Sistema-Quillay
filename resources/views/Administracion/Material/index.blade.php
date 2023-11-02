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
            @foreach($materiales as $material)
            <tr>
                <td>{{ $material->NombreArchivo }}</td>
                <td>{{ $material->asignatura->Nombre }}</td>
                <td>
                    @if ($material->curso)
                        {{ $material->curso->NombreCurso }}
                    @else
                        N/A
                    @endif
                </td>
                <td>
                    @if ($material->nivelEducativo)
                        {{ $material->nivelEducativo->NombreNivel }}
                    @else
                        N/A
                    @endif
                </td>
                <td>
                    @if ($material->usuario)
                        {{ $material->usuario->Nombre }}
                    @else
                        N/A
                    @endif
                </td>
                <td>{{ $material->Estado }}</td>
                <td>{{ $material->FechaSubida }}</td>
                <td>
                    <a href="{{ route('materiales.edit', $material->MaterialID) }}" class="btn btn-primary btn-sm user-edit">Editar</a>
                    <form action="{{ route('materiales.destroy', $material->MaterialID) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm user-delete" onclick="return confirm('¿Estás seguro de eliminar este material educativo?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
