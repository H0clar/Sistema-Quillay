@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="user-form-title">Crear Asignatura</h2>
    <form method="POST" action="{{ route('asignaturas.create') }}" class="user-form">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre de la Asignatura</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" placeholder="Ingrese el nombre de la asignatura" required>
        </div>

        <!-- Puedes agregar más campos de creación según tus necesidades -->

        <div class="form-group">
            <button type="submit" class="btn btn-primary user-form-button">Crear</button>
            <a href="{{ route('asignaturas.index') }}" class="btn btn-secondary user-form-button cancel">Cancelar</a>
        </div>
    </form>
</div>
@endsection
