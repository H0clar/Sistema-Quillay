@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="course-form-title">Crear Curso</h2>
    <form method="POST" action="{{ route('cursos.create') }}" class="user-form">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre del Curso</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del curso" required>
        </div>

        <div class="form-group">
            <label for="abreviatura">Abreviatura</label>
            <input type="text" class="form-control" id="abreviatura" name="abreviatura" placeholder="Ingrese la abreviatura" required>
        </div>

        <div class="form-group">
            <label for="nivel_educativo">Nivel Educativo</label>
            <select class="form-control" id="nivel_educativo" name="nivel_educativo" required>
                <option value="1">Nivel 1</option>
                <option value="2">Nivel 2</option>
                <!-- Agrega más opciones de niveles educativos según tu base de datos -->
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary user-form-button">Crear Curso</button>
            <a href="{{ route('cursos.index') }}" class="btn btn-secondary user-form-button cancel">Cancelar</a>
        </div>
    </form>
</div>
@endsection
