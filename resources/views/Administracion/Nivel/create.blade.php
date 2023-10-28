@extends('layout.app')

@section('content')
    <div class="container">
        <h2>Crear Nuevo Nivel Educativo</h2>
        <form method="POST" action="{{ route('niveles.store') }}">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="abreviatura">Abreviatura:</label>
                <input type="text" name="abreviatura" class="form-control" id="abreviatura" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
