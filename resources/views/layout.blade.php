<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Encabezado y metadatos ... -->
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Barra de navegación superior -->
        @include('layout.navbar')

        <!-- Barra lateral -->
        @include('layout.sidebar')

        <!-- Contenido principal -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- Pie de página -->
        @include('layout.footer')
    </div>

    <!-- Scripts ... -->
</body>
</html>
