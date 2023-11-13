@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="user-form-title">Agregar Usuario</h2>

    <form method="POST" action="{{ route('usuarios.store') }}" class="user-form">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="rut">Rut:</label>
            <input type="text" name="rut" id="rut" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="tipo_usuario_id">Rol:</label>
            <select name="tipo_usuario_id" id="tipo_usuario_id" class="form-control" required>
                @foreach($tiposUsuario as $tipo)
                    <option value="{{ $tipo->TipoUsuarioID }}">{{ $tipo->Tipo }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary user-form-button">Guardar Usuario</button>
    </form>
</div>
@endsection
