@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="course-form-title">Editar Registro de Cambio</h2>
    <form method="POST" action="{{ route('cambios.update', $id) }}" class="user-form">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="usuario">Usuario:</label>
            <input type="text" class="form-control" id="usuario" name="usuario" value="Nombre de Usuario" required>
        </div>

        <div class="form-group">
            <label for="material">Material Educativo:</label>
            <input type="text" class="form-control" id="material" name="material" value="Nombre del Material Educativo" required>
        </div>

        <div class="form-group">
            <label for="tipo_cambio">Tipo de Cambio:</label>
            <input type="text" class="form-control" id="tipo_cambio" name="tipo_cambio" value="Tipo de Cambio" required>
        </div>

        <div class="form-group">
            <label for="fecha_cambio">Fecha de Cambio:</label>
            <input type="date" class="form-control" id="fecha_cambio" name="fecha_cambio" value="Fecha del Cambio" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary user-form-button">Actualizar</button>
            <a href="{{ route('cambios.index') }}" class="btn btn-secondary user-form-button cancel">Cancelar</a>
        </div>
    </form>
</div>
@endsection
