@extends('layout.app')

@section('content')
<div class="container">
    <h2>Eliminar Usuario</h2>
    <form method="POST" action="{{ route('usuarios.destroy', $usuario->id) }}">
        @csrf
        @method('DELETE') <!-- Agregamos esto para indicar que es una solicitud DELETE -->
        <p>¿Estás seguro de que deseas eliminar este usuario?</p>
        <button type="submit" class="btn btn-danger">Eliminar</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
