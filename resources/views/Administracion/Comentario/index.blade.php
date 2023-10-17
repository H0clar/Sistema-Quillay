@extends('layout.app')  {{-- Asegúrate de que esta línea refleje la ruta correcta a tu diseño principal --}}

@section('content')
<div class="container">
    <h2 class="log-list-title">Gestión de Comentarios y Respuestas</h2>

    <table class="table log-table mt-3">
        <thead>
            <tr>
                <th>ID del Comentario</th>
                <th>ID del Material Educativo</th>
                <th>ID del Usuario</th>
                <th>Comentario</th>
                <th>Fecha de Comentario</th>
                <th>Respuesta</th>
                <th>Fecha de Respuesta</th>
            </tr>
        </thead>
        <tbody>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>Comentario 1</td>
            <td>2021-01-01</td>
            <td>Respuesta 1</td>
            <td>2021-01-01</td>
            <td>
                <a href="{{ route('comentarios.edit', 1) }}" class="btn btn-primary btn-sm user-edit">Editar</a>
                <button class="btn btn-danger btn-sm user-delete" onclick="confirm('¿Estás seguro de eliminar este comentario?')">Eliminar</button>
        </tbody>

        <tbody>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>Comentario 1</td>
            <td>2021-01-01</td>
            <td>Respuesta 1</td>
            <td>2021-01-01</td>
            <td>
                <a href="{{ route('comentarios.edit', 1) }}" class="btn btn-primary btn-sm user-edit">Editar</a>
                <button class="btn btn-danger btn-sm user-delete" onclick="confirm('¿Estás seguro de eliminar este comentario?')">Eliminar</button>
        </tbody>
    </table>
</div>
@endsection
