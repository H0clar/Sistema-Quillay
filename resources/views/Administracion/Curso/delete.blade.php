@extends('layout.app')

@section('content')
    <div class="container">
        <h2>Eliminar Usuario</h2>
        <div class="alert alert-danger">
            ¿Estás seguro de eliminar el usuario: {{ $usuario->nombre }}?
        </div>
        <form method="POST" action="{{ route('usuarios.destroy', ['id' => $usuario->id]) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">Sí, eliminar</button>
        </form>
    </div>
@endsection
