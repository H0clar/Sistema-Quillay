@extends('layout.app')

@section('content')
<div class="container">
    <h2>Editar Usuario</h2>
    <form method="POST" action="{{ route('usuarios.update', $usuario->id) }}">
        @csrf
        @method('PUT') <!-- Agregamos esto para indicar que es una solicitud PUT -->
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $usuario->nombre }}">
        </div>
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $usuario->apellido }}">
        </div>
        <div class="form-group">
            <label for="correo">Correo Electrónico</label>
            <input type="email" class="form-control" id="correo" name="correo" value="{{ $usuario->correo }}">
        </div>
        <div class="form-group">
            <label for="rol">Rol</label>
            <input type="text" class="form-control" id="rol" name="rol" value="{{ $usuario->rol }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
