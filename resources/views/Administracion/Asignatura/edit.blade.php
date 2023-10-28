@extends('layout.app')

@section('content')
<div class="container">
    <h2>Editar Asignatura</h2>

    @if ($asignatura)
    <form method="POST" action="{{ route('asignaturas.update', ['id' => $asignatura->AsignaturaID]) }}">
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

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
    @else
    <p>La asignatura no se encontró o es nula.</p>
    @endif
</div>
@endsection
