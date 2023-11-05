<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cssUsuario/styleUsuario.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cssNivel/styleNivel.css') }}">
    <title>Sistema Quillay</title>
</head>
<body>
    <div class="content">
        <aside class="sidebar">
            <div class="logo-container">
                <a href="{{ route('home') }}">
                    <img src="/img/logo/logo-blanco.png" alt="Logo">
                </a>
            </div>
            <div class="admin-panel">Panel de Profesor</div>
            <ul>
                <li><a id="gestion-material-button" href="{{ route('materiales.index') }}">Gestión de Material Educativo</a></li>
                <li><a id="gestion-comentarios-button" href="{{ route('comentarios.index') }}">Gestión de Comentarios y Respuestas</a></li>
            </ul>
        </aside>
        <main class="container">
            <header>
                <span class="header-text">Control Profesor</span>
                <div class="header-icons">
                    <div class="icon-container">
                        <img src="/img/iconos/notificacion/campana-sin-blanco.png" alt="Icono 1" width="24" height="24">
                    </div>
                    <div class="icon-container">
                        <img src="/img/iconos/notificacion/mensaje-sin-blanco.png" alt="Icono 2" width="24" height="24">
                    </div>
                </div>
                <span class="header-text logout">Cerrar Sesión</span>
            </header>
            <div id="content-container">
                @yield('content')
            </div>
        </main>
    </div>
    <script src="{{ asset('script.js') }}"></script>
</body>
</html>
