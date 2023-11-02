@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="user-list-title">Niveles Educativos</h2>
    <a href="{{ route('niveles.create') }}" class="btn btn-primary add-user-button">Crear Nuevo Nivel Educativo</a>

    <!-- Contenedor para el formulario de filtrado con margen inferior -->
    <div class="user-filter-container mb-3">
        <div class="form-inline">
            <div class="form-group">
                <label for="nombre" class="user-filter-label">Buscar por Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control user-filter-input">
                <button type="submit" class="btn user-filter-button">Buscar</button>
            </div>
        </div>
    </div>

    <!-- Agrega un margen superior a la tabla -->
    <table class="table user-table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Abreviatura</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Ejemplo de fila, reemplaza con los datos reales -->
            @foreach ($niveles as $nivel)
                <tr>
                    <td>{{ $nivel->NivelEducativoID }}</td>
                    <td>{{ $nivel->Nombre }}</td>
                    <td>{{ $nivel->Abreviatura }}</td>
                    <td>
                        <a href="{{ route('niveles.edit', ['id' => $nivel->NivelEducativoID]) }}" class="btn btn-primary btn-sm user-edit">Editar</a>
                        
                        <!-- Agrega el botón para eliminar utilizando un formulario -->
                        <form action="{{ route('niveles.destroy', ['id' => $nivel->NivelEducativoID]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm user-delete" onclick="return confirm('¿Estás seguro de eliminar este nivel educativo?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
