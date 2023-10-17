@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="user-form-title">Crear Usuario</h2>
    <form method="POST" action="{{ route('usuarios.create') }}" class="user-form">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
        </div>

        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido" required>
        </div>

        <div class="form-group">
            <label for="correo">Correo Electrónico</label>
            <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese su correo electrónico" required>
        </div>

        <div class="form-group">
            <label for="rol">Rol</label>
            <select class="form-control" id="rol" name="rol" required>
                <option value="Usuario">Usuario</option>
                <option value="Administrador">Administrador</option>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary user-form-button">Crear</button>
            <a href="{{ route('usuarios.index') }}" class="btn btn-secondary user-form-button cancel">Cancelar</a>
        </div>
    </form>
</div>
@endsection
