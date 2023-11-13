@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="user-form-title">Ocultar Material Educativo</h2>

    <form method="POST" action="{{ route('materiales.destroy', $material->MaterialID) }}" onsubmit="return confirm('¿Seguro que quieres ocultar este material?');" class="user-form">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger user-form-button">Ocultar Material Educativo</button>
    </form>
</div>

@endsection
