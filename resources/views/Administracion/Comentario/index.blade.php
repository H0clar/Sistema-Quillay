@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="log-list-title">Gestión de Comentarios y Respuestas</h2>

    <table class="table log-table mt-3">
        <thead>
            <tr>
                <th>ID del Comentario</th>
                <th>ID del Material Educativo</th>
                <th>ID del Usuario</th>
                <th>Comentario/Respuesta</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comentarios as $comentario)
                <tr>
                    <td>{{ $comentario->ComentarioID }}</td>
                    <td>{{ $comentario->MaterialID }}</td>
                    <td>{{ $comentario->UsuarioID }}</td>
                    <td>
                        <strong>Comentario:</strong> {{ $comentario->Comentario }}<br>
                        @if ($comentario->respuestas->count() > 0)
                            <strong>Respuesta:</strong> {{ $comentario->respuestas[0]->Respuesta }}
                        @else
                            <em>Sin respuesta</em>
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
