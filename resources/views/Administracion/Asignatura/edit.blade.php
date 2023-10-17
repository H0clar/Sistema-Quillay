@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="user-form-title">Editar Asignatura</h2>
    <form method="POST" action="{{ route('asignaturas.update', $id) }}" class="user-form">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre de la Asignatura</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" placeholder="Ingrese el nombre de la asignatura" required>
        </div>

        <!-- Puedes agregar más campos de edición según tus necesidades -->

        <div class="form-group">
            <button type="submit" class="btn btn-primary user-form-button">Actualizar</button>
            <a href="{{ route('asignaturas.index') }}" class="btn btn-secondary user-form-button cancel">Cancelar</a>
        </div>
    </form>
</div>
@endsection
