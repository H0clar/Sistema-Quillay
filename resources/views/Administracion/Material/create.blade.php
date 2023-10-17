@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="material-form-title">Crear Material Educativo</h2>
    <form method="POST" action="{{ route('materiales.create') }}" class="user-form" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre del Archivo</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del archivo" required>
        </div>

        <div class="form-group">
            <label for="asignatura">Asignatura</label>
            <select class="form-control" id="asignatura" name="asignatura" required>
                <option value="Matemáticas">Matemáticas</option>
                <option value="Lenguaje">Lenguaje</option>
                <!-- Agrega más opciones de asignaturas según tus necesidades -->
            </select>
        </div>

        <div class="form-group">
            <label for="curso">Curso</label>
            <input type="text" class="form-control" id="curso" name="curso" placeholder="Ingrese el curso" required>
        </div>

        <div class="form-group">
            <label for="nivel_educativo">Nivel Educativo</label>
            <input type="text" class="form-control" id="nivel_educativo" name="nivel_educativo" placeholder="Ingrese el nivel educativo" required>
        </div>

        <div class="form-group">
            <label for="profesor">Profesor</label>
            <select class="form-control" id="profesor" name="profesor" required>
                <option value="Profesor 1">Profesor 1</option>
                <option value="Profesor 2">Profesor 2</option>
                <!-- Agrega más opciones de profesores según tus necesidades -->
            </select>
        </div>

        <div class="form-group">
            <label for="estado">Estado</label>
            <select class="form-control" id="estado" name="estado" required>
                <option value="Activo">Activo</option>
                <option value="No Activo">No Activo</option>
            </select>
        </div>

        

        <div class="form-group">
            <label for="archivo">Subir Archivo</label>
            <input type="file" class="form-control-file" id="archivo" name="archivo" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary user-form-button">Crear Material Educativo</button>
            <a href="{{ route('materiales.index') }}" class="btn btn-secondary user-form-button cancel">Cancelar</a>
        </div>
    </form>
</div>
@endsection
