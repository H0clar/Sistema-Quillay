@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="log-create-title">Crear Nuevo Registro de Cambio</h2>

    <form action="{{ route('cambios.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="usuario">Usuario:</label>
            <input type="text" class="form-control" id="usuario" name="usuario">
        </div>

        <div class="form-group">
            <label for="material">Material Educativo:</label>
            <input type="text" class="form-control" id="material" name="material">
        </div>

        <div class="form-group">
            <label for="tipo_cambio">Tipo de Cambio:</label>
            <input type="text" class="form-control" id="tipo_cambio" name="tipo_cambio">
        </div>

        <div class="form-group">
            <label for="fecha_cambio">Fecha de Cambio:</label>
            <input type="date" class="form-control" id="fecha_cambio" name="fecha_cambio">
        </div>

        <button type="submit" class="btn btn-primary">Crear Cambio</button>
    </form>
</div>
@endsection
