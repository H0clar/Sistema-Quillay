<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cssUsuario/styleUsuario.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cssNivel/styleNivel.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <main class="container-fluid">
            <header>
                <span class="header-text">Control Administrativo</span>
                <div class="header-icons">
                    <div class="icon-container" data-bs-toggle="modal" data-bs-target="#notificacionModal">
                        <img src="/img/iconos/notificacion/campana-sin-blanco.png" alt="Icono 1" width="24" height="24">
                    </div>
                    <div class="icon-container" data-bs-toggle="modal" data-bs-target="#mensajeModal">
                        <img src="/img/iconos/notificacion/mensaje-sin-blanco.png" alt="Icono 2" width="24" height="24">
                    </div>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="GET">
                    @csrf
                    <span class="header-text logout" onclick="logout()" style="cursor: pointer;">Cerrar Sesión</span>
                </form>
            </header>
            <div id="content-container">
                @yield('content')
            </div>
        </main>
    </div>

    <!-- Modal de Notificaciones -->
    <div class="modal fade" id="notificacionModal" tabindex="-1" aria-labelledby="notificacionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-end modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="notificacionModalLabel">Notificaciones</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Contenido del modal de notificaciones -->
                    <p>Aquí va tu contenido de notificaciones...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Mensajes -->
    <div class="modal fade" id="mensajeModal" tabindex="-1" aria-labelledby="mensajeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-end modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mensajeModalLabel">Mensajes</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Contenido del modal de mensajes -->
                    <p>Aquí va tu contenido de mensajes...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap y otros que puedas necesitar -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('script.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function logout() {
            document.getElementById('logout-form').submit();
        }
    </script>
</body>
</html>



