@extends('layout.app')

@section('content')
    <div class="container">
        <h2>Asignaturas</h2>
        <a href="{{ route('asignaturas.create') }}" class="btn btn-primary">Crear Nueva Asignatura</a>
        <br><br>
        @if (count($asignaturas) > 0)
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($asignaturas as $asignatura)
                    <tr>
                        <td>{{ $asignatura->AsignaturaID }}</td>
                        <td>{{ $asignatura->Nombre }}</td>
                        <td>
                            <a href="{{ route('asignaturas.edit', ['id' => $asignatura->AsignaturaID]) }}" class="btn btn-primary btn-sm user-edit">Editar</a>
                            <form action="{{ route('asignaturas.destroy', ['id' => $asignatura->AsignaturaID]) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta asignatura?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <p>No hay asignaturas disponibles.</p>
        @endif
    </div>
@endsection
