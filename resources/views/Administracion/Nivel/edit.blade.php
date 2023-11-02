@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="user-form-title">Editar Nivel Educativo</h2>
    <form method="POST" action="{{ route('niveles.update', ['id' => $nivel->NivelEducativoID]) }}" class="user-form">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $nivel->Nombre }}" required>
        </div>

        <div class="form-group">
            <label for="abreviatura">Abreviatura</label>
            <input type="text" class="form-control" id="abreviatura" name="abreviatura" value="{{ $nivel->Abreviatura }}" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary user-form-button">Actualizar</button>
            <a href="{{ route('niveles.index') }}" class="btn btn-secondary user-form-button cancel">Cancelar</a>
        </div>
    </form>
</div>
@endsection
