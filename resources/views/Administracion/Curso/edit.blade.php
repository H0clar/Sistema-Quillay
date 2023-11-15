@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="user-form-title">Editar Curso</h2>
    <form action="{{ route('cursos.update', ['curso' => $curso->CursoID]) }}" method="POST" class="user-form">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre" id="Nombre" class="form-control" value="{{ $curso->Nombre }}">
        </div>

        <div class="form-group">
            <label for="NivelEducativoID">Nivel Educativo ID</label>
            <input type="text" name="NivelEducativoID" id="NivelEducativoID" class="form-control" value="{{ $curso->NivelEducativoID }}">
        </div>

        <div class="form-group">
            <label for="Abreviatura">Abreviatura</label>
            <input type="text" name="Abreviatura" id="Abreviatura" class="form-control" value="{{ $curso->Abreviatura }}">
        </div>

        <!-- Agrega aquí más campos del formulario según tus necesidades -->

        <div class="form-group">
            <button type="submit" class="btn btn-primary user-form-button">Guardar Cambios</button>
            <a href="{{ route('cursos.index') }}" class="btn btn-secondary user-form-button cancel">Cancelar</a>
        </div>
    </form>
</div>
@endsection
