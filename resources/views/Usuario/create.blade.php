@extends('layout.app')

@section('content')
<div class="container">
    <h2>Crear Usuario</h2>
    <form method="POST" action="{{ route('usuarios.create') }}">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
        </div>
        <div class="form-group">
            <label for="correo">Correo Electrónico</label>
            <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo Electrónico">
        </div>
        <div class="form-group">
            <label for="rol">Rol</label>
            <input type="text" class="form-control" id="rol" name="rol" placeholder="Rol">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
