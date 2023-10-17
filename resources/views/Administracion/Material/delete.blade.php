@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="material-form-title">Eliminar Material Educativo</h2>
    <p>¿Estás seguro de que deseas eliminar el material educativo: "{{ $material->nombre }}"?</p>
    <form action="{{ route('materiales.destroy', $id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger material-form-button">Eliminar Material Educativo</button>
        <a href="{{ route('materiales.index') }}" class="btn btn-secondary material-form-button">Cancelar</a>
    </form>
</div>
@endsection
