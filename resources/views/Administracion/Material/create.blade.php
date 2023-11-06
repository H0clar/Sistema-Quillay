@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="user-form-title">Agregar Material Educativo</h2>

    <form method="POST" action="{{ route('materiales.store') }}" enctype="multipart/form-data" class="user-form">
        @csrf

        <div class="form-group">
            <label for="TipoArchivoID">Tipo de Archivo</label>
            <select class="form-control" id="TipoArchivoID" name="TipoArchivoID" required>
                <option value="" disabled selected>Seleccione un tipo de archivo</option>
                @foreach($tiposArchivo as $tipoArchivo)
                    <option value="{{ $tipoArchivo->TipoArchivoID }}">{{ $tipoArchivo->Tipo }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="ProfesorID">Profesor</label>
            <select class="form-control" id="ProfesorID" name="ProfesorID" required>
                <option value="" disabled selected>Seleccione un profesor</option>
                @foreach($profesores as $profesor)
                    <option value="{{ $profesor->UsuarioID }}">{{ $profesor->Nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="AsignaturaID">Asignatura</label>
            <select class="form-control" id="AsignaturaID" name="AsignaturaID" required>
                <option value="" disabled selected>Seleccione una asignatura</option>
                @foreach($asignaturas as $asignatura)
                    <option value="{{ $asignatura->AsignaturaID }}">{{ $asignatura->Nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="CursoID">Curso</label>
            <select class="form-control" id="CursoID" name="CursoID" required>
                <option value="" disabled selected>Seleccione un curso</option>
                @foreach($cursos as $curso)
                    <option value="{{ $curso->CursoID }}">{{ $curso->Nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="NivelEducativoID">Nivel Educativo</label>
            <select class="form-control" id="NivelEducativoID" name="NivelEducativoID" required>
                <option value="" disabled selected>Seleccione un nivel educativo</option>
                @foreach($nivelesEducativos as $nivel)
                    <option value="{{ $nivel->NivelEducativoID }}">{{ $nivel->Nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="Estado">Estado</label>
            <select class="form-control" id="Estado" name="Estado" required>
                <option value="Activo">Activo</option>
                <option value="No Activo">No Activo</option>
            </select>
        </div>

        <div class="form-group">
            <label for="FechaSubida">Fecha de Subida</label>
            <input type="date" class="form-control" id="FechaSubida" name="FechaSubida" required>
        </div>

        <div class="form-group">
            <label for="archivo">Archivo (solo PDF)</label>
            <input type="file" class="form-control" id="archivo" name="archivo" accept=".pdf" required>
        </div>

        <button type="submit" class="btn btn-primary user-form-button">Agregar Material Educativo</button>
    </form>
</div>
@endsection
