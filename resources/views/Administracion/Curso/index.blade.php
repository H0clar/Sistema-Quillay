@extends('layout.app')

@section('content')
    <div class="container">
        <h2>Cursos</h2>
        <a href="{{ route('cursos.create') }}" class="btn btn-primary">Crear Nuevo Curso</a>
        <br><br>
        @if (count($cursos) > 0)
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Nivel Educativo ID</th>
                        <th>Abreviatura</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cursos as $curso)
                        <tr>
                            <td>{{ $curso->CursoID }}</td>
                            <td>{{ $curso->Nombre }}</td>
                            <td>{{ $curso->NivelEducativoID }}</td>
                            <td>{{ $curso->Abreviatura }}</td>
                            <td>
                                <a href="{{ route('cursos.edit', ['id' => $curso->CursoID]) }}" class="btn btn-primary btn-sm">Editar</a>
                                
                                <!-- Agrega el botón para eliminar utilizando un formulario -->
                                <form action="{{ route('cursos.destroy', ['id' => $curso->CursoID]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este curso?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No hay cursos disponibles.</p>
        @endif
    </div>
@endsection
