@extends('layout.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>MaterialID</th>
                    <th>Tipo de Archivo</th>
                    <th>Nombre de Archivo</th>
                    <th>Asignatura</th>
                    <th>Curso</th>
                    <th>Nivel Educativo</th>
                    <th>Estado</th>
                    <th>Ruta Google Drive</th>
                    <th>Fecha de Subida</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($materialesProfe) && !empty($materialesProfe))
                    @foreach($materialesProfe as $material)
                        <tr>
                            <td>{{ $material->MaterialID }}</td>
                            <td>{{ $material->tipoArchivo->Tipo }}</td>
                            <td>{{ $material->NombreArchivo }}</td>
                            <td>{{ $material->asignatura->Nombre }}</td>
                            <td>{{ $material->curso->Nombre }}</td>
                            <td>{{ $material->nivelEducativo->Nombre }}</td>
                            <td>{{ $material->Estado ? 'Activo' : 'Inactivo' }}</td>
                            <td>
                                <a href="{{ asset($material->RutaGoogleDrive) }}" target="_blank">Ver/Descargar</a>
                            </td>
                            <td>{{ $material->FechaSubida }}</td>
                            <td>
                                {{-- Botón para editar --}}
                                <a href="{{ route('materiales.edit', ['materiale' => $material->MaterialID]) }}" class="btn btn-primary">Editar</a>

                                {{-- Botón para ocultar --}}
                                <form action="{{ route('materiales.destroy', ['materiale' => $material->MaterialID]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de ocultar este material?')">Ocultar</button>
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="10">No hay materiales disponibles</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
