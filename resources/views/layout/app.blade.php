<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">

    <title>Mi Listado</title>
</head>
<body>
    <div class="content">
        <aside class="sidebar">
            <div class="logo-container">
                <a href="{{ route('home') }}"> <!-- Cambia 'route('home')' por la ruta real de tu página de inicio -->
                    <img src="/img/logo/logo-blanco.png" alt="Logo">
                </a>
            </div>
            
            <div class="admin-panel">Panel Administrativo</div>
            <ul>
                <li><a id="gestion-usuarios-button" href="{{route('usuarios.index')}}">Gestión de Usuarios</a></li>

                <li><a href="niveles-educativos.html">Gestión de Niveles Educativos</a></li>
                <li><a href="cursos.html">Gestión de Cursos</a></li>
                <li><a href="asignaturas.html">Gestión de Asignaturas</a></li>
                <li><a href="material-educativo.html">Gestión de Material Educativo</a></li>
                <li><a href="registro-cambios.html">Registro de Cambios</a></li>
                <li><a href="comentarios.html">Gestión de Comentarios y Respuestas</a></li>
            </ul>
        </aside>

        <main class="container">
            <header>
                <span class="header-text">Control Administración</span>
                <div class="header-icons">
                    <div class="icon-container">
                        <!-- Aquí puedes colocar tu primera imagen/icono -->
                        <img src="/img/iconos/notificacion/campana-sin-blanco.png" alt="Icono 1" width="24" height="24">
                    </div>
                    <div class="icon-container">
                        <!-- Aquí puedes colocar tu segunda imagen/icono -->
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
    
    <script src="scrypt.js"></script>
</body>
</html>
