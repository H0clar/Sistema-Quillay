@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="user-form-title">Crear Nuevo Nivel Educativo</h2>
    <form method="POST" action="{{ route('niveles.create') }}" class="user-form">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre" required>
        </div>

        <div class="form-group">
            <label for="abreviatura">Abreviatura:</label>
            <input type="text" class="form-control" id="abreviatura" name="abreviatura" placeholder="Ingrese la abreviatura" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary user-form-button">Crear</button>
            <form method="POST" action="{{ route('niveles.store') }}" class="user-form">
            </div>
    </form>
</div>
@endsection
