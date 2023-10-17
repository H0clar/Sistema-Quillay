@extends('layout.app')

@section('content')

<div class="container">
    <h2 class="nivel-list-title">Listado de Niveles Educativos</h2>
    <a href="{{ route('niveles.create') }}" class="btn btn-primary add-nivel-button add-nivel-button--margin">Agregar Nivel Educativo</a>
    <table class="table nivel-table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Abreviatura</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí, normalmente, mostrarías los datos de los niveles, pero si no quieres traer datos de la base de datos, puedes omitir este bloque -->

            <tr>
                <th>1</th>
                <td>Nivel 1 EDUCACION ESPECIAL TRASTORNOS ESPECIFICOS DEL LENGUAJE</td>
                <td>N1</td>
                <td>
                    <a href="{{ route('niveles.edit', 1) }}" class="btn btn-primary btn-sm user-edit">Editar</a>
                    <button class="btn btn-danger btn-sm user-delete" onclick="confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</button>
                </td>
            </tr>

            <tr>
                <th>2</th>
                <td>Nivel 2 EDUCACION PARVULARIA</td>
                <td>N2</td>
                <td>
                    <a href="{{ route('niveles.edit', 2) }}" class="btn btn-primary btn-sm user-edit">Editar</a>
                    <button class="btn btn-danger btn-sm user-delete" onclick="confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</button>
                </td>
            </tr>
        
            <tr>
                <th>3</th>
                <td>Nivel 3 ENSEÑANZA BÁSICA</td>
                <td>N2</td>
                <td>
                    <a href="{{ route('niveles.edit', 2) }}" class="btn btn-primary btn-sm user-edit">Editar</a>
                    <button class="btn btn-danger btn-sm user-delete" onclick="confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
