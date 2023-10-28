@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="log-list-title">Eliminar Comentario</h2>
    <p>¿Estás seguro de que deseas eliminar este comentario?</p>
    
    <form action="{{ route('comentarios.destroy', $comentario->ComentarioID) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar Comentario</button>
    </form>
</div>
@endsection
