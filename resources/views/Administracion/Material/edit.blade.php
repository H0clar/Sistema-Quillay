@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="material-form-title">Editar Material Educativo</h2>
    <form method="POST" action="{{ route('materiales.update', $material->MaterialID) }}" class="user-form">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="tipo_archivo">Tipo de Archivo</label>
            <input type="text" class="form-control" id="tipo_archivo" name="TipoArchivo" value="{{ $material->TipoArchivo }}" required>
        </div>

        <div class="form-group">
            <label for="profesor">Profesor</label>
            <select class="form-control" id="usuario" name="ProfesorID" required>
                <option value="" disabled>Seleccione un profesor</option>
                @foreach($profesores as $profesor)
                    <option value="{{ $profesor->UsuarioID }}" {{ $material->UsuarioID === $profesor->UsuarioID ? 'selected' : '' }}>
                        {{ $profesor->Nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="asignatura">Asignatura</label>
            <select class="form-control" id="asignatura" name="AsignaturaID" required>
                <option value="" disabled>Seleccione una asignatura</option>
                @foreach($asignaturas as $asignatura)
                    <option value="{{ $asignatura->AsignaturaID }}" {{ $material->AsignaturaID === $asignatura->AsignaturaID ? 'selected' : '' }}>
                        {{ $asignatura->Nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="curso">Curso</label>
            <select class="form-control" id="curso" name="CursoID" required>
                <option value="" disabled>Seleccione un curso</option>
                @foreach($cursos as $curso)
                    <option value="{{ $curso->CursoID }}" {{ $material->CursoID === $curso->CursoID ? 'selected' : '' }}>
                        {{ $curso->Nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="nivel_educativo">Nivel Educativo</label>
            <select class="form-control" id="nivel_educativo" name="NivelEducativoID" required>
                <option value="" disabled>Seleccione un nivel educativo</option>
                @foreach($nivelesEducativos as $nivel)
                    <option value="{{ $nivel->NivelEducativoID }}" {{ $material->NivelEducativoID === $nivel->NivelEducativoID ? 'selected' : '' }}>
                        {{ $nivel->Nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="estado">Estado</label>
            <select class="form-control" id="estado" name="Estado" required>
                <option value="Activo" {{ $material->Estado === 'Activo' ? 'selected' : '' }}>Activo</option>
                <option value="No Activo" {{ $material->Estado === 'No Activo' ? 'selected' : '' }}>No Activo</option>
            </select>
        </div>

        <div class="form-group">
            <label for="fecha_subida">Fecha de Subida</label>
            <input type="date" class="form-control" id="fecha_subida" name="FechaSubida" value="{{ $material->FechaSubida }}" required>
        </div>

        <button type="submit" class="btn btn-primary user-form-button">Actualizar Material Educativo</button>
        <a href="{{ route('materiales.index') }}" class="btn btn-secondary user-form-button cancel">Cancelar</a>
    </form>
</div>
@endsection
