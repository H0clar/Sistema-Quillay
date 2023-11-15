@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="user-form-title">Eliminar Usuario</h2>
    <p>¿Estás seguro de eliminar este usuario?</p>
    
    <form method="POST" action="{{ route('usuarios.destroy', $usuario->UsuarioID) }}" class="user-form" onsubmit="return confirm('¿Estás seguro de eliminar este usuario? Esta acción no se puede deshacer.')">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger user-form-button">Eliminar</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary user-form-button">Cancelar</a>
    </form>
</div>
@endsection
