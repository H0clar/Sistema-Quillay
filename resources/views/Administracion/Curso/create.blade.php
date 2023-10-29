@extends('layout.app')

@section('content')
<div class="container">
    <h2>Crear Curso</h2>
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre" id="Nombre" class="form-control">
        </div>

        <div class="form-group">
            <label for="NivelEducativoID">Nivel Educativo ID</label>
            <input type="text" name="NivelEducativoID" id="NivelEducativoID" class="form-control">
        </div>

        <div class="form-group">
            <label for="Abreviatura">Abreviatura</label>
            <input type="text" name="Abreviatura" id="Abreviatura" class="form-control">
        </div>

        <!-- Agrega aquí más campos del formulario según tus necesidades -->

        <button type="submit" class="btn btn-primary">Crear Curso</button>
    </form>
</div>
@endsection
