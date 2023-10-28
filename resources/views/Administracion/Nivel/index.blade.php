@extends('layout.app')

@section('content')
    <div class="container">
        <h2>Niveles Educativos</h2>
        <a href="{{ route('niveles.create') }}" class="btn btn-primary">Crear Nuevo Nivel Educativo</a>
        <br><br>
        @if (count($niveles) > 0)
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Abreviatura</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($niveles as $nivel)
                    <tr>
                        <td>{{ $nivel->NivelEducativoID }}</td>
                        <td>{{ $nivel->Nombre }}</td>
                        <td>{{ $nivel->Abreviatura }}</td>
                        <td>
                            <a href="{{ route('niveles.edit', ['id' => $nivel->NivelEducativoID]) }}" class="btn btn-primary btn-sm user-edit">Editar</a>
                            <form action="{{ route('niveles.destroy', ['id' => $nivel->NivelEducativoID]) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este nivel educativo?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <p>No hay niveles educativos disponibles.</p>
        @endif
    </div>
@endsection
