@extends('layout.app')

@section('content')
<div class="container">
    <h2>Listado de Usuarios</h2>
    <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Agregar Usuario</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo Electrónico</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            {{-- No necesitas iterar sobre usuarios aquí, ya que no los estás pasando desde el controlador. --}}
        </tbody>
    </table>
</div>
@endsection
