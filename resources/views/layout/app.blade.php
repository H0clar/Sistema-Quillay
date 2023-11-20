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
            <div class="admin-panel">Panel Administrativo</div>
            <ul>
                @if(session('user_info')['tipoUsuario'] === 'Profesor' || session('user_info')['tipoUsuario'] === 'Administrador' || session('user_info')['tipoUsuario'] === 'Trabajador_UTP')
                    <li><a id="gestion-material-button" href="{{ route('materiales.index') }}">Gestión de Material Educativo</a></li>
                @endif

                @if(session('user_info')['tipoUsuario'] === 'Profesor' || session('user_info')['tipoUsuario'] === 'Trabajador_UTP')
                    <li><a id="gestion-comentarios-profesor-button" href="{{ route('comentarios.index') }}">Gestión de Comentarios y Respuestas</a></li>
                @endif

                <!-- Opciones de menú para roles distintos al profesor y trabajador UTP -->
                @if(session('user_info')['tipoUsuario'] !== 'Profesor' && session('user_info')['tipoUsuario'] !== 'Trabajador_UTP')
                    <li><a id="gestion-usuarios-button" href="{{ route('usuarios.index') }}">Gestión de Usuarios</a></li>
                    <li><a id="gestion-niveles-button" href="{{ route('niveles.index') }}">Gestión de Niveles Educativos</a></li>
                    <li><a id="gestion-cursos-button" href="{{ route('cursos.index') }}">Gestión de Cursos</a></li>
                    <li><a id="gestion-asignaturas-button" href="{{ route('asignaturas.index') }}">Gestión de Asignaturas</a></li>
                    <li><a id="gestion-cambio-button" href="{{ route('cambios.index') }}">Registro de Cambios</a></li>
                    <li><a id="gestion-comentarios-admin-button" href="{{ route('comentarios.index') }}">Gestión de Comentarios y Respuestas</a></li>
                    
                @endif
            </ul>
        </aside>
        <main class="container">
            <header>
                <span class="header-text">Control Administrativo</span>
                <div class="header-icons">
                    <div class="icon-container">
                        <img src="/img/iconos/notificacion/campana-sin-blanco.png" alt="Icono 1" width="24" height="24">
                    </div>
                    <div class="icon-container">
                        <img src="/img/iconos/notificacion/mensaje-sin-blanco.png" alt="Icono 2" width="24" height="24">
                    </div>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="GET">
                    @csrf
                    <span class="header-text logout" onclick="logout()" style="cursor: pointer; float: right; margin-right: 10px;">Cerrar Sesión</span>
                </form>
            </header>
            <div id="content-container">
                @yield('content')
            </div>
        </main>
    </div>
    <script src="{{ asset('script.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function logout() {
            document.getElementById('logout-form').submit();
        }
    </script>
</body>
</html>
