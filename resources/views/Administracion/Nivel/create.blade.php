@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="user-form-title">Crear Nivel Educativo</h2>
    <form method="POST" action="{{ route('niveles.create') }}" class="user-form">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre del Nivel</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del nivel" required>
        </div>

        <div class="form-group">
            <label for="abreviatura">Abreviatura</label>
            <input type="text" class="form-control" id="abreviatura" name="abreviatura" placeholder="Ingrese la abreviatura" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary user-form-button">Crear</button>
            <a href="{{ route('niveles.index') }}" class="btn btn-secondary user-form-button cancel">Cancelar</a>
        </div>
    </form>
</div>
@endsection
