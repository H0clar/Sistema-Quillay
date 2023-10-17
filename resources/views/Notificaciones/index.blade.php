@extends('layout.app') {{-- Asegúrate de que esta línea refleje la ruta correcta a tu diseño principal --}}

@section('content')
<div class="container">
    <h2 class="notificaciones-title">Notificaciones</h2>

            <!-- Notificación de ejemplo 1 -->
        <div class="notificacion">
            <p>Este es un ejemplo de notificación 1</p>
            <small>Fecha y hora 1</small>
        </div>

        <!-- Notificación de ejemplo 2 -->
        <div class="notificacion">
            <p>Este es un ejemplo de notificación 2</p>
            <small>Fecha y hora 2</small>
        </div>

</div>
@endsection
