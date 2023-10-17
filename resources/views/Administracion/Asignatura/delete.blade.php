@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="nivel-list-title">Eliminar Asignatura</h2>
    <div class="alert alert-danger">
        ¿Estás seguro de eliminar la asignatura: {{ $asignatura->nombre }}?
    </div>
    <form method="POST" action="{{ route('asignaturas.destroy', $asignatura->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Sí, eliminar</button>
        <a href="{{ route('asignaturas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
