@extends('layout.baseProfe')

@section('content')
<div class="container">
    <h2>Subir Material Educativo</h2>

    <!-- Formulario para subir material educativo -->
        @csrf

        <div class="form-group">
            <label for="TipoArchivo">Tipo de Archivo</label>
            <select class="form-control" id="TipoArchivo" name="TipoArchivo" required>
                <option value="Guía">Guía</option>
                <option value="Prueba">Prueba</option>
                <option value="Planificación">Planificación</option>
                <!-- Agrega más opciones según tus necesidades -->
            </select>
        </div>

        <div class="form-group">
            <label for="Archivo">Seleccionar Archivo</label>
            <input type="file" class="form-control-file" id="Archivo" name="Archivo" required>
        </div>

        <div class="form-group">
            <label for="AsignaturaID">Asignatura</label>
            <select class="form-control" id="AsignaturaID" name="AsignaturaID" required>
                @foreach($asignaturas as $asignatura)
                <option value="{{ $asignatura->AsignaturaID }}">{{ $asignatura->Nombre }}</option>
                @endforeach
            </select>
        </div>

        <!-- Puedes agregar más campos según tus necesidades -->

        <button type="submit" class="btn btn-primary">Subir Material Educativo</button>
    </form>
</div>
@endsection
