@extends('layout.app')

@section('content')
<div class="container">
    <h2>Gestión de Material Educativo</h2>

    <!-- Botón para agregar nuevo material educativo -->
    <a class="btn btn-primary" href="{{ route('materiales.create') }}">Agregar Nuevo Material</a>

    <!-- Lista de recursos educativos -->
    <table class="table">
        <thead>
            <tr>
                <th>Nombre del Archivo</th>
                <th>Asignatura</th>
                <th>Curso</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($materiales as $material)
            <tr>
                <td>{{ $material->NombreArchivo }}</td>
                <td>{{ $material->asignatura->Nombre }}</td>
                <td>{{ $material->curso->Nombre }}</td>
                <td>
                    <!-- Enlaces para ver, editar y eliminar material -->
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
