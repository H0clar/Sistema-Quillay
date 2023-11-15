@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="user-form-title">Editar Usuario</h2>

    <form method="POST" action="{{ route('usuarios.update', $usuario->UsuarioID) }}" class="user-form">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre_usuario">Nombre:</label>
            <input type="text" name="nombre_usuario" id="nombre_usuario" class="form-control" value="{{ $usuario->NombreUsuario }}" required>
        </div>

        <div class="form-group">
            <label for="apellido_usuario">Apellido:</label>
            <input type="text" name="apellido_usuario" id="apellido_usuario" class="form-control" value="{{ $usuario->ApellidoUsuario }}" required>
        </div>

        <div class="form-group">
            <label for="correo_electronico">Correo Electrónico:</label>
            <input type="email" name="correo_electronico" id="correo_electronico" class="form-control" value="{{ $usuario->CorreoElectronico }}" required>
        </div>

        <div class="form-group">
            <label for="tipo_usuario_id">Rol:</label>
            <select name="tipo_usuario_id" id="tipo_usuario_id" class="form-control" required>
                @foreach($tiposUsuario as $tipo)
                    <option value="{{ $tipo->TipoUsuarioID }}" @if($usuario->tipoUsuario && $usuario->tipoUsuario->TipoUsuarioID === $tipo->TipoUsuarioID) selected @endif>{{ $tipo->Tipo }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="contrasena">Contraseña:</label>
            <input type="password" name="contrasena" id="contrasena" class="form-control">
        </div>

        <div class="form-group">
            <label for="asignatura_id">Asignatura:</label>
            <select name="asignatura_id" id="asignatura_id" class="form-control">
                <option value="">Seleccionar Asignatura</option>
                @foreach($asignaturas as $asignatura)
                    <option value="{{ $asignatura->AsignaturaID }}" @if($usuario->asignatura && $usuario->asignatura->AsignaturaID === $asignatura->AsignaturaID) selected @endif>{{ $asignatura->Nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary user-form-button">Actualizar Usuario</button>
    </form>
</div>
@endsection
