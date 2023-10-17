@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="log-delete-title">Eliminar Registro de Cambio</h2>

    <p>¿Estás seguro de que deseas eliminar este registro de cambio?</p>

    <form action="{{ route('cambios.destroy', $log->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Eliminar Cambio</button>
    </form>
</div>
@endsection
