@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="log-list-title">Gestión de Comentarios y Respuestas</h2>

    <table class="table log-table mt-3">
        <thead>
            <tr>
                <th>ID del Comentario</th>
                <th>Material Educativo</th>
                <th>Usuario</th>
                <th>Comentario</th>
                <th>Respuesta</th>
                <th>Fecha de Comentario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comentarios as $comentario)
                <tr>
                    <td>{{ $comentario->ComentarioID }}</td>
                    <td>{{ $comentario->material->NombreArchivo }} ({{ $comentario->material->TipoArchivo->Tipo }})</td>
                    <td>{{ $comentario->usuario->Nombre }} {{ $comentario->usuario->Apellido }}</td>
                    <td>{{ $comentario->Comentario }}</td>
                    <td>
                        @if ($comentario->respuestas->count() > 0)
                            {{ $comentario->respuestas[0]->Respuesta }}
                        @else
                            Sin respuesta
                        @endif
                    </td>
                    <td>{{ $comentario->FechaComentario }}</td>
                    <td>
                        <a href="{{ route('comentarios.edit', $comentario->ComentarioID) }}" class="btn btn-primary btn-sm user-edit">Editar Comentario</a>
                        <form action="{{ route('comentarios.destroy', $comentario->ComentarioID) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm user-delete" onclick="return confirm('¿Estás seguro de eliminar este comentario?')">Eliminar Comentario</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
