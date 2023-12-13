@extends('layout.app')

@section('content')
<div class="container-fluid">
    <h2 class="user-form-title">Editar Material Educativo</h2>

    <form method="POST" action="{{ route('materiales.update', $material->MaterialID) }}" enctype="multipart/form-data" class="user-form">
        @csrf
        @method('PUT') <!-- Indica que se utilizará el método PUT para actualizar el registro -->

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
            <label for="CursoID">Curso</label>
            <select class="form-control" id="CursoID" name="CursoID" required>
                <option value="" disabled selected>Seleccione un nivel educativo primero</option>
            </select>
        </div>

        <div class="form-group">
            <label for="AsignaturaID">Asignatura</label>
            <select class="form-control" id="AsignaturaID" name="AsignaturaID" required>
                <option value="" disabled selected>Seleccione una asignatura</option>
            </select>
        </div>

        <div class="form-group">
            <label for="ProfesorID">Profesor</label>
            <select class="form-control" id="ProfesorID" name="ProfesorID" required>
                <option value="" disabled selected>Seleccione un profesor</option>
                @foreach($profesores as $profesor)
                    <option value="{{ $profesor->UsuarioID }}" {{ $material->UsuarioID == $profesor->UsuarioID ? 'selected' : '' }}>{{ $profesor->Nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="TipoArchivoID">Tipo de Archivo</label>
            <select class="form-control" id="TipoArchivoID" name="TipoArchivoID" required>
                <option value="" disabled selected>Seleccione un tipo de archivo</option>
                @foreach($tiposArchivo as $tipoArchivo)
                    <option value="{{ $tipoArchivo->TipoArchivoID }}" {{ $material->TipoArchivoID == $tipoArchivo->TipoArchivoID ? 'selected' : '' }}>{{ $tipoArchivo->Tipo }}</option>
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

        <!-- Campo de fecha oculto con valor actual -->
        <input type="hidden" id="FechaSubida" name="FechaSubida" value="{{ now()->toDateString() }}">

        <button type="submit" class="btn btn-primary user-form-button">Actualizar Material Educativo</button>
    </form>
</div>

<script>
    document.getElementById('NivelEducativoID').addEventListener('change', function() {
        var nivelEducativoID = this.value;
        var cursosSelector = document.getElementById('CursoID');

        // Limpiar opciones existentes
        cursosSelector.innerHTML = '';

        // Realizar una solicitud AJAX para obtener los cursos
        fetch(`/cursos-por-nivel-educativo/${nivelEducativoID}`)
            .then(response => response.json())
            .then(data => {
                data.forEach(curso => {
                    var option = document.createElement('option');
                    option.value = curso.CursoID;
                    option.textContent = curso.Nombre;
                    cursosSelector.appendChild(option);
                });
            });

        // Limpiar las asignaturas cuando cambia el nivel educativo
        var asignaturasSelector = document.getElementById('AsignaturaID');
        asignaturasSelector.innerHTML = '<option value="" disabled selected>Seleccione una asignatura</option>';
    });

    document.getElementById('CursoID').addEventListener('change', function() {
        var cursoID = this.value;
        var asignaturasSelector = document.getElementById('AsignaturaID');

        // Limpiar opciones existentes
        asignaturasSelector.innerHTML = '';

        // Realizar una solicitud AJAX para obtener las asignaturas
        fetch(`/asignaturas-por-curso/${cursoID}`)
            .then(response => response.json())
            .then(data => {
                data.forEach(asignatura => {
                    var option = document.createElement('option');
                    option.value = asignatura.AsignaturaID;
                    option.textContent = asignatura.Nombre;
                    asignaturasSelector.appendChild(option);
                });
            });
    });

    document.getElementById('ProfesorID').addEventListener('change', function() {
        var profesorID = this.value;
        var asignaturasSelector = document.getElementById('AsignaturaID');

        // Limpiar opciones existentes
        asignaturasSelector.innerHTML = '';

        // Realizar una solicitud AJAX para obtener las asignaturas
        fetch(`/asignaturas-por-profesor/${profesorID}`)
            .then(response => response.json())
            .then(data => {
                data.forEach(asignatura => {
                    var option = document.createElement('option');
                    option.value = asignatura.AsignaturaID;
                    option.textContent = asignatura.Nombre;
                    asignaturasSelector.appendChild(option);
                });
            });
    });
</script>
@endsection
