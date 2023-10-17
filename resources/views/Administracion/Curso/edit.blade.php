@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="course-form-title">Editar Curso</h2>
    <form method="POST" action="{{ route('cursos.update', $id) }}" class="user-form">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre del Curso</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" placeholder="Ingrese el nombre del curso" required>
        </div>

        <div class="form-group">
            <label for="abreviatura">Abreviatura</label>
            <input type="text" class="form-control" id="abreviatura" name="abreviatura" value="{{ old('abreviatura') }}" placeholder="Ingrese la abreviatura" required>
        </div>

        <div class="form-group">
            <label for="nivel_educativo">Nivel Educativo</label>
            <select class="form-control" id="nivel_educativo" name="nivel_educativo" required>
                <option value="1" {{ old('nivel_educativo') == 1 ? 'selected' : '' }}>Nivel 1</option>
                <option value="2" {{ old('nivel_educativo') == 2 ? 'selected' : '' }}>Nivel 2</option>
                <!-- Agrega más opciones de niveles educativos según tu base de datos -->
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary user-form-button">Actualizar</button>
            <a href="{{ route('cursos.index') }}" class="btn btn-secondary user-form-button cancel">Cancelar</a>
        </div>
    </form>
</div>
@endsection
