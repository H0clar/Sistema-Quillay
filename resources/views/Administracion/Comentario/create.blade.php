@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="log-list-title">Crear Comentario</h2>
    
    <form action="{{ route('comentarios.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="contenido">Contenido:</label>
            <input type="text" name="contenido" class="form-control" id="contenido">
        </div>
        <div class="form-group">
            <label for="MaterialID">ID del Material Educativo:</label>
            <input type="text" name="MaterialID" class="form-control" id="MaterialID">
        </div>
        <button type="submit" class="btn btn-primary">Crear Comentario</button>
    </form>
</div>
@endsection
