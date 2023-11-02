@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="user-form-title">Crear Curso</h2>
    <form action="{{ route('cursos.store') }}" method="POST" class="user-form">
        @csrf

        <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Ingrese el nombre del curso" required>
        </div>

        <div class="form-group">
            <label for="NivelEducativoID">Nivel Educativo ID</label>
            <input type="text" name="NivelEducativoID" id="NivelEducativoID" class="form-control" placeholder="Ingrese el ID del nivel educativo" required>
        </div>

        <div class="form-group">
            <label for="Abreviatura">Abreviatura</label>
            <input type="text" name="Abreviatura" id="Abreviatura" class="form-control" placeholder="Ingrese la abreviatura" required>
        </div>

        <!-- Agrega aquí más campos del formulario según tus necesidades -->

        <div class="form-group">
            <button type="submit" class="btn btn-primary user-form-button">Crear Curso</button>
            <a href="{{ route('cursos.index') }}" class="btn btn-secondary user-form-button cancel">Cancelar</a>
        </div>
    </form>
</div>
@endsection
