@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="user-form-title">Agregar Material Educativo</h2>

    <form method="POST" action="{{ route('materiales.store') }}" enctype="multipart/form-data" class="user-form">
        @csrf

        <div class="form-group">
            <label for="NivelEducativoID">Nivel Educativo</label>
            <select class="form-control" id="NivelEducativoID" name="NivelEducativoID" required onchange="cargarCursos()">
                <option value="" disabled selected>Seleccione un nivel educativo</option>
                @foreach($nivelesEducativos as $nivel)
                    <option value="{{ $nivel->NivelEducativoID }}">{{ $nivel->Nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="CursoID">Curso</label>
            <select class="form-control" id="CursoID" name="CursoID" required onchange="cargarAsignaturas()">
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
                    <option value="{{ $profesor->UsuarioID }}">{{ $profesor->NombreUsuario }}</option>
                @endforeach
            </select>
        </div>

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
            <label for="Estado">Estado</label>
            <select class="form-control" id="Estado" name="Estado" required>
                <option value="Activo">Activo</option>
                <option value="No Activo">No Activo</option>
            </select>
        </div>

        <div class="form-group">
            <label for="archivo">Archivo (solo PDF)</label>
            <input type="file" class="form-control" id="archivo" name="archivo" accept=".pdf" required>
        </div>

        <button type="submit" class="btn btn-primary user-form-button">Agregar Material Educativo</button>
    </form>
</div>

<script>
    function cargarCursos() {
        var nivelEducativoID = document.getElementById('NivelEducativoID').value;
        var cursoSelect = document.getElementById('CursoID');

        // Realiza una solicitud AJAX para obtener los cursos
        $.ajax({
            url: '/cursos-por-nivel-educativo/' + nivelEducativoID,
            type: 'GET',
            success: function (response) {
                // Limpiar y actualizar el selector de cursos
                cursoSelect.innerHTML = '<option value="">Seleccione un curso</option>';
                response.forEach(function (curso) {
                    cursoSelect.innerHTML += '<option value="' + curso.CursoID + '">' + curso.Nombre + '</option>';
                });
            },
            error: function (error) {
                console.log(error);
            }
        });
    }


    function cargarAsignaturas() {
        var cursoID = document.getElementById('CursoID').value;
        var asignaturaSelect = document.getElementById('AsignaturaID');

        // Realiza una solicitud AJAX para obtener las asignaturas
        $.ajax({
            url: '/asignaturas-por-curso/' + cursoID,
            type: 'GET',
            success: function (response) {
                // Limpiar y actualizar el selector de asignaturas
                asignaturaSelect.innerHTML = '<option value="">Seleccione una asignatura</option>';
                for (var i = 0; i < response.length; i++) {
                    asignaturaSelect.innerHTML += '<option value="' + response[i].AsignaturaID + '">' + response[i].Nombre + '</option>';
                }
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
</script>
@endsection
