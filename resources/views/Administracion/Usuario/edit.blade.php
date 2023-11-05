@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="user-form-title">Editar Usuario</h2>

    <form method="POST" action="{{ route('usuarios.update', $usuario->UsuarioID) }}" class="user-form">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $usuario->Nombre }}" required>
        </div>

        <div class "form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" class="form-control" value="{{ $usuario->Apellido }}" required>
        </div>

        <div class="form-group">
            <label for="correo_electronico">Correo Electrónico:</label>
            <input type="email" name="correo_electronico" id="correo_electronico" class="form-control" value="{{ $usuario->CorreoElectronico }}" required>
        </div>

        <div class="form-group">
            <label for="tipo_usuario_id">Rol:</label>
            <select name="tipo_usuario_id" id="tipo_usuario_id" class="form-control" required>
                @foreach($tiposUsuario as $tipo)
                    <option value="{{ $tipo->TipoUsuarioID }}" @if($usuario->TipoUsuarioID === $tipo->TipoUsuarioID) selected @endif>{{ $tipo->Tipo }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="asignatura_id">Asignatura:</label>
            <select name="asignatura_id" id="asignatura_id" class="form-control">
                <option value="">Seleccionar Asignatura</option>
                @foreach($asignaturas as $asignatura)
                    <option value="{{ $asignatura->AsignaturaID }}" @if($usuario->AsignaturaID === $asignatura->AsignaturaID) selected @endif>{{ $asignatura->Nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary user-form-button">Actualizar Usuario</button>
    </form>
</div>
@endsection
