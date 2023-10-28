@extends('layout.app')

@section('content')
    <div class="container">
        <h2>Crear Nueva Asignatura</h2>
        <form method="POST" action="{{ route('asignaturas.store') }}">
            @csrf

            <div class="form-group">
                <label for="nombre">Nombre de la Asignatura</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="curso_id">Curso</label>
                <select name="curso_id" id="curso_id" class="form-control" required>
                    <option value="" disabled selected>Seleccione un curso</option>
                    @foreach($cursos as $curso)
                        <option value="{{ $curso->CursoID }}">{{ $curso->Nombre }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Agrega otros campos del formulario si es necesario -->

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
