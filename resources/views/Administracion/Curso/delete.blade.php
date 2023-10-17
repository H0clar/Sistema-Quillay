@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="course-form-title">Eliminar Curso</h2>
    <p>¿Estás seguro de que deseas eliminar el curso: "{{ $curso->nombre }}"?</p>
    <form action="{{ route('cursos.destroy', $id) }}" method="POST">
        @csrf
        @method('DELETE') <!-- Asegúrate de que estás utilizando el método correcto para eliminar -->
        <button type="submit" class="btn btn-danger course-form-button">Eliminar Curso</button>
        <a href="{{ route('cursos.index') }}" class="btn btn-secondary course-form-button">Cancelar</a>
    </form>
</div>
@endsection
