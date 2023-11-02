@extends('layout.app')

@section('content')
    <div class="container">
        <h2 class="user-form-title">Crear Nueva Asignatura</h2>
        <form method="POST" action="{{ route('asignaturas.store') }}" class="user-form">
            @csrf

            <div class="form-group">
                <label for="nombre">Nombre de la Asignatura</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre de la asignatura" required>
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

            <button type="submit" class="btn btn-primary user-form-button">Guardar</button>
            <a href="{{ route('asignaturas.index') }}" class="btn btn-secondary user-form-button cancel">Cancelar</a>
        </form>
    </div>
@endsection
