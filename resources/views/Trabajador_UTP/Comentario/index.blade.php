@extends('layout.baseProfe')

@section('content')
<div class="container">
    <h2>Gestión de Comentarios de Profesores</h2>

    <!-- Botón para agregar nuevo comentario -->
    <a class="btn btn-primary" href="{{ route('comentarios.create') }}">Agregar Nuevo Comentario</a>

    <!-- Lista de comentarios -->
    <table class="table">
        <thead>
            <tr>
                <th>Material Educativo</th>
                <th>Usuario</th>
                <th>Comentario</th>
                <th>Fecha de Comentario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comentarios as $comentario)
            <tr>
                <td>{{ $comentario->material->NombreArchivo }}</td>
                <td>{{ $comentario->usuario->Nombre }} {{ $comentario->usuario->Apellido }}</td>
                <td>{{ $comentario->Comentario }}</td>
                <td>{{ $comentario->FechaComentario }}</td>
                <td>
                    <!-- Enlaces para ver, editar y eliminar comentario -->
                    <a href="{{ route('comentarios.show', $comentario->ComentarioID) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('comentarios.edit', $comentario->ComentarioID) }}" class="btn btn-warning">Editar</a>
                    <form method="POST" action="{{ route('comentarios.destroy', $comentario->ComentarioID)">
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
