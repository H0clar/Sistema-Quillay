@extends('layout.app')

@section('content')
    <div class="container">
        <h2>Editar Nivel Educativo</h2>
        <form method="POST" action="{{ route('niveles.update', ['id' => $nivel->NivelEducativoID]) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $nivel->Nombre }}" required>
            </div>
            <div class="form-group">
                <label for="abreviatura">Abreviatura:</label>
                <input type="text" name="abreviatura" class="form-control" id="abreviatura" value="{{ $nivel->Abreviatura }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
@endsection
