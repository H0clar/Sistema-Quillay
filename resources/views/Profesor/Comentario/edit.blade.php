@extends('layout.baseProfe')

@section('content')
<div class="container">
    <h2>Editar Comentario</h2>

    <form method="POST" action="{{ route('comentarios.update', $comentario->ComentarioID) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="MaterialID">Material Educativo</label>
            <select class="form-control" id="MaterialID" name="MaterialID" required>
                @foreach($materiales as $material)
                <option value="{{ $material->MaterialID }}" {{ $comentario->MaterialID == $material->MaterialID ? 'selected' : '' }}>
                    {{ $material->NombreArchivo }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="UsuarioID">Usuario</label>
            <select class="form-control" id="UsuarioID" name="UsuarioID" required>
                @foreach($usuarios as $usuario)
                <option value="{{ $usuario->UsuarioID }}" {{ $comentario->UsuarioID == $usuario->UsuarioID ? 'selected' : '' }}>
                    {{ $usuario->Nombre }} {{ $usuario->Apellido }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="Comentario">Comentario</label>
            <textarea class="form-control" id="Comentario" name="Comentario" rows="4" required>{{ $comentario->Comentario }}</textarea>
        </div>

        <!-- Puedes agregar más campos según tus necesidades -->

        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>
@endsection
