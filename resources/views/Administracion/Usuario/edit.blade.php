@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="user-form-title">Editar Usuario</h2>
    <form method="POST" action="{{ route('usuarios.update', $id) }}" class="user-form">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" placeholder="Ingrese su nombre" required>
        </div>

        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ old('apellido') }}" placeholder="Ingrese su apellido" required>
        </div>

        <div class="form-group">
            <label for="correo">Correo Electrónico</label>
            <input type="email" class="form-control" id="correo" name="correo" value="{{ old('correo') }}" placeholder="Ingrese su correo electrónico" required>
        </div>

        <div class="form-group">
            <label for="rol">Rol</label>
            <select class="form-control" id="rol" name="rol" required>
                <option value="Usuario" @if (old('rol') === 'Usuario') selected @endif>Usuario</option>
                <option value="Administrador" @if (old('rol') === 'Administrador') selected @endif>Administrador</option>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary user-form-button">Actualizar</button>
            <a href="{{ route('usuarios.index') }}" class="btn btn-secondary user-form-button cancel">Cancelar</a>
        </div>
    </form>
</div>
@endsection
