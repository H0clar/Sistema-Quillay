@extends('layout.baseProfe')

@section('content')
<div class="container">
    <h2>Confirmar Eliminación</h2>
    <p>¿Estás seguro de que deseas eliminar este material educativo?</p>
    
    <form method="POST" action="{{ route('materiales.destroy', $material->MaterialID) }}">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Sí, Eliminar</button>
    </form>

    <a class="btn btn-primary" href="{{ route('materiales.index') }}">Cancelar</a>
</div>
@endsection
