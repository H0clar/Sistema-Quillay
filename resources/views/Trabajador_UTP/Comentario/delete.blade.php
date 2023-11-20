@extends('layout.baseProfe')

@section('content')
<div class="container">
    <h2>Confirmar Eliminación</h2>
    <p>¿Estás seguro de que deseas eliminar este comentario?</p>
    
    <form method="POST" action="{{ route('comentarios.destroy', $comentario->ComentarioID) }}">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Sí, Eliminar</button>
    </form>

    <a class="btn btn-primary" href="{{ route('comentarios.index') }}">Cancelar</a>
</div>
@endsection
