@extends('layout.app')

@section('content')
    <div class="container">
        <h2 class="user-form-title">Eliminar Asignatura</h2>
        <div class="alert alert-danger">
            ¿Estás seguro de eliminar la asignatura: {{ $asignatura->Nombre }}?
        </div>
        <form method="POST" action="{{ route('asignatura.destroy', ['id' => $asignatura->AsignaturaID]) }}" class="user-form">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger user-form-button" onclick="return confirm('¿Estás seguro de eliminar esta asignatura?')">Sí, eliminar</button>
            <a href="{{ route('asignaturas.index') }}" class="btn btn-secondary user-form-button cancel">Cancelar</a>
        </form>
    </div>
@endsection
