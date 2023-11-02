@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="log-list-title">Editar Comentario o Respuesta</h2>

    <form action="{{ route('comentarios.update', $comentario->ComentarioID) }}" method="POST" class="user-form">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="contenido">Contenido del Comentario:</label>
            <input type="text" name="contenido" class="form-control" id="contenido" value="{{ $comentario->Comentario }}">
        </div>

        <div class="form-group">
            <label for="contenido_respuesta">Contenido de la Respuesta:</label>
            <input type="text" name="contenido_respuesta" class="form-control" id="contenido_respuesta" value="{{ $comentario->respuestas->count() > 0 ? $comentario->respuestas[0]->Respuesta : '' }}">
        </div>

        <div class="form-group">
            <label for="MaterialID">ID del Material Educativo:</label>
            <input type="text" name="MaterialID" class="form-control" id="MaterialID" value="{{ $comentario->MaterialID }}">
        </div>

        <button type="submit" class="btn btn-primary user-form-button">Actualizar Comentario y/o Respuesta</button>
        <a href="{{ route('comentarios.index') }}" class="btn btn-secondary user-form-button cancel">Cancelar</a>
    </form>
</div>
@endsection
