@extends('layout.app')

@section('content')
    <div class="container">
        <h2>Eliminar Asignatura</h2>
        <div class="alert alert-danger">
            ¿Estás seguro de eliminar la asignatura: {{ $asignatura->Nombre }}?
        </div>
        <form method="POST" action="{{ route('asignatura.destroy', ['id' => $asignatura->AsignaturaID]) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta asignatura?')">Sí, eliminar</button>
        </form>
    </div>
@endsection
