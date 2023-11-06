@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="user-form-title">Editar Material Educativo</h2>

    <form method="POST" action="{{ route('materiales.update', $material->MaterialID) }}" enctype="multipart/form-data" class="user-form">
        @csrf
        @method('PUT') <!-- Indica que se utilizará el método PUT para actualizar el registro -->

        <div class="form-group">
            <label for="TipoArchivoID">Tipo de Archivo</label>
            <select class="form-control" id="TipoArchivoID" name="TipoArchivoID" required>
                <option value="" disabled>Seleccione un tipo de archivo</option>
                @foreach($tiposArchivo as $tipoArchivo)
                    <option value="{{ $tipoArchivo->TipoArchivoID }}" {{ $material->TipoArchivoID == $tipoArchivo->TipoArchivoID ? 'selected' : '' }}>{{ $tipoArchivo->Tipo }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="ProfesorID">Profesor</label>
            <select class="form-control" id="ProfesorID" name="ProfesorID" required>
                <option value="" disabled>Seleccione un profesor</option>
                @foreach($profesores as $profesor)
                    <option value="{{ $profesor->UsuarioID }}" {{ $material->UsuarioID == $profesor->UsuarioID ? 'selected' : '' }}>{{ $profesor->Nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="AsignaturaID">Asignatura</label>
            <select class="form-control" id="AsignaturaID" name="AsignaturaID" required>
                <option value="" disabled>Seleccione una asignatura</option>
                @foreach($asignaturas as $asignatura)
                    <option value="{{ $asignatura->AsignaturaID }}" {{ $material->AsignaturaID == $asignatura->AsignaturaID ? 'selected' : '' }}>{{ $asignatura->Nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class "form-group">
            <label for="CursoID">Curso</label>
            <select class="form-control" id="CursoID" name="CursoID" required>
                <option value="" disabled>Seleccione un curso</option>
                @foreach($cursos as $curso)
                    <option value="{{ $curso->CursoID }}" {{ $material->CursoID == $curso->CursoID ? 'selected' : '' }}>{{ $curso->Nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="NivelEducativoID">Nivel Educativo</label>
            <select class="form-control" id="NivelEducativoID" name="NivelEducativoID" required>
                <option value="" disabled>Seleccione un nivel educativo</option>
                @foreach($nivelesEducativos as $nivel)
                    <option value="{{ $nivel->NivelEducativoID }}" {{ $material->NivelEducativoID == $nivel->NivelEducativoID ? 'selected' : '' }}>{{ $nivel->Nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="Estado">Estado</label>
            <select class="form-control" id="Estado" name="Estado" required>
                <option value="Activo" {{ $material->Estado ? 'selected' : '' }}>Activo</option>
                <option value="No Activo" {{ !$material->Estado ? 'selected' : '' }}>No Activo</option>
            </select>
        </div>

        <div class="form-group">
            <label for="FechaSubida">Fecha de Subida</label>
            <input type="date" class="form-control" id="FechaSubida" name="FechaSubida" value="{{ $material->FechaSubida }}" required>
        </div>

        <button type="submit" class="btn btn-primary user-form-button">Actualizar Material Educativo</button>
    </form>
</div>
@endsection
