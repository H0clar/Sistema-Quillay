@extends('layout.app')

@section('content')
    <div class="container">
        <h2 class="user-form-title">Editar Asignatura</h2>

        @if ($asignatura)
        <form method="POST" action="{{ route('asignaturas.update', ['id' => $asignatura->AsignaturaID]) }}" class="user-form">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">Nombre de la Asignatura</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $asignatura->Nombre }}" required>
            </div>

            <div class="form-group">
                <label for="curso_id">Curso</label>
                <select name="curso_id" id="curso_id" class="form-control" required>
                    @foreach ($cursos as $curso)
                        <option value="{{ $curso->CursoID }}" {{ $curso->CursoID == $asignatura->CursoID ? 'selected' : '' }}>
                            {{ $curso->Nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary user-form-button">Actualizar</button>
                <a href="{{ route('asignaturas.index') }}" class="btn btn-secondary user-form-button cancel">Cancelar</a>
            </div>
        </form>
        @else
        <p>La asignatura no se encontró o es nula.</p>
        @endif
    </div>
@endsection
