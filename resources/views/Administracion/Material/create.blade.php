@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="user-form-title">Agregar Material Educativo</h2>

    <form method="POST" action="{{ route('materiales.store') }}" enctype="multipart/form-data" class="user-form">
        @csrf

        <div class="form-group">
            <label for="tipo_archivo">Tipo de Archivo</label>
            <input type="text" class="form-control" id="tipo_archivo" name="TipoArchivo" required>
        </div>

        <div class="form-group">
            <label for="profesor">Profesor</label>
            <select class="form-control" id="usuario" name="ProfesorID" required>
                <option value="" disabled selected>Seleccione un profesor</option>
                @foreach($profesores as $profesor)
                    <option value="{{ $profesor->UsuarioID }}">{{ $profesor->Nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="asignatura">Asignatura</label>
            <select class="form-control" id="asignatura" name="AsignaturaID" required>
                <option value="" disabled selected>Seleccione una asignatura</option>
                @foreach($asignaturas as $asignatura)
                    <option value="{{ $asignatura->AsignaturaID }}">{{ $asignatura->Nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="curso">Curso</label>
            <select class="form-control" id="curso" name="CursoID" required>
                <option value="" disabled selected>Seleccione un curso</option>
                @foreach($cursos as $curso)
                    <option value="{{ $curso->CursoID }}">{{ $curso->Nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="nivel_educativo">Nivel Educativo</label>
            <select class="form-control" id="nivel_educativo" name="NivelEducativoID" required>
                <option value="" disabled selected>Seleccione un nivel educativo</option>
                @foreach($nivelesEducativos as $nivel)
                    <option value="{{ $nivel->NivelEducativoID }}">{{ $nivel->Nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="estado">Estado</label>
            <select class="form-control" id="estado" name="Estado" required>
                <option value="Activo">Activo</option>
                <option value="No Activo">No Activo</option>
            </select>
        </div>

        <div class="form-group">
            <label for="fecha_subida">Fecha de Subida</label>
            <input type="date" class="form-control" id="fecha_subida" name="FechaSubida" required>
        </div>

        <div class="form-group">
            <label for="archivo">Archivo (solo PDF)</label>
            <input type="file" class="form-control" id="archivo" name="archivo" required>
        </div>

        <button type="submit" class="btn btn-primary user-form-button">Agregar Material Educativo</button>
    </form>
</div>
@endsection
