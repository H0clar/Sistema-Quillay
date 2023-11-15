@extends('layout.app')

@section('content')
    <div class="container">
        <h2 class="user-list-title">Cursos</h2>
        <a href="{{ route('cursos.create') }}" class="btn btn-primary add-user-button">Crear Nuevo Curso</a>
        <br><br>

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
                    <th>Nivel Educativo</th> <!-- Cambia a "Nivel Educativo" -->
                    <th>Abreviatura</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cursos as $curso)
                    <tr>
                        <td>{{ $curso->CursoID }}</td>
                        <td>{{ $curso->Nombre }}</td>
                        <td>
                            @if($curso->nivelEducativo)
                                {{ $curso->nivelEducativo->Nombre }} ({{ $curso->nivelEducativo->Abreviatura }})
                            @else
                                N/A
                            @endif
                        </td>
                        
                        <td>{{ $curso->Abreviatura }}</td>
                        <td>
                            <a href="{{ route('cursos.edit', ['curso' => $curso->CursoID]) }}" class="btn btn-primary btn-sm user-edit">Editar</a>
                            
                            <!-- Agrega el botón para eliminar utilizando un formulario -->
                            <form action="{{ route('cursos.destroy', ['curso' => $curso->CursoID]) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm user-delete" onclick="return confirm('¿Estás seguro de eliminar este curso?')">Eliminar</button>
                            </form>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
