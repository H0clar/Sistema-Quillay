@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="user-form-title">Agregar Usuario</h2>

    <form method="POST" action="{{ route('usuarios.store') }}" class="user-form">
        @csrf

        <div class="form-group">
            <label for="nombre_usuario">Nombre:</label>
            <input type="text" name="nombre_usuario" id="nombre_usuario" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="apellido_usuario">Apellido:</label>
            <input type="text" name="apellido_usuario" id="apellido_usuario" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="rut_usuario">Rut:</label>
            <input type="text" name="rut_usuario" id="rut_usuario" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="tipo_usuario_id">Rol:</label>
            <select name="tipo_usuario_id" id="tipo_usuario_id" class="form-control" required>
                @foreach($tiposUsuario as $tipo)
                    <option value="{{ $tipo->TipoUsuarioID }}">{{ $tipo->Tipo }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="contrasena">Contraseña:</label>
            <input type="password" name="contrasena" id="contrasena" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary user-form-button">Guardar Usuario</button>
    </form>
</div>
@endsection
