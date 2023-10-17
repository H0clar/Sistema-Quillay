@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="user-form-title">Editar Nivel</h2>
    <form method="POST" action="{{ route('usuarios.update', $id) }}" class="user-form">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" placeholder="Ingrese su nombre" required>
        </div>

        <div class="form-group">
            <label for="apellido">Abreviatura</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ old('apellido') }}" placeholder="Ingrese su apellido" required>
        </div>

        

        <div class="form-group">
            <button type="submit" class="btn btn-primary user-form-button">Actualizar</button>
            <a href="{{ route('usuarios.index') }}" class="btn btn-secondary user-form-button cancel">Cancelar</a>
        </div>
    </form>
</div>
@endsection
