@extends('layout.baseProfe')

@section('content')
<div class="container">
    <h2>Editar Material Educativo</h2>

    <form method="POST" action="{{ route('materiales.update', $material->MaterialID) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="TipoArchivo">Tipo de Archivo</label>
            <select class="form-control" id="TipoArchivo" name="TipoArchivo" required>
                <option value="Guía" {{ $material->TipoArchivo === 'Guía' ? 'selected' : '' }}>Guía</option>
                <option value="Prueba" {{ $material->TipoArchivo === 'Prueba' ? 'selected' : '' }}>Prueba</option>
                <option value="Planificación" {{ $material->TipoArchivo === 'Planificación' ? 'selected' : '' }}>Planificación</option>
                <!-- Agrega más opciones según tus necesidades -->
            </select>
        </div>

        <div class="form-group">
            <label for="Archivo">Seleccionar Archivo</label>
            <input type="file" class="form-control-file" id="Archivo" name="Archivo">
        </div>

        <div class="form-group">
            <label for="AsignaturaID">Asignatura</label>
            <select class="form-control" id="AsignaturaID" name="AsignaturaID" required>
                @foreach($asignaturas as $asignatura)
                <option value="{{ $asignatura->AsignaturaID }}" {{ $material->AsignaturaID == $asignatura->AsignaturaID ? 'selected' : '' }}>
                    {{ $asignatura->Nombre }}
                </option>
                @endforeach
            </select>
        </div>

        <!-- Puedes agregar más campos según tus necesidades -->

        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>
@endsection
