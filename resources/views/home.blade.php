@extends('layout.app')

@section('content')
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- Puedes agregar contenido adicional aquí si es necesario -->
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body text-center">

                            @if (session('status'))
                                <div class="alert alert-success mt-4" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            @if (session('user_info'))
                                <h3 class="mb-4">Bienvenido, {{ session('user_info')['nombreUsuario'] }} {{ session('user_info')['apellidoUsuario'] }}!</h3>
                                <i class="fas fa-5x fa-user-circle"></i>
                                <p>
                                    Tipo de Usuario: {{ session('user_info')['tipoUsuario'] }}<br>
                                    ¡Bienvenido(a) {{ session('user_info')['tipoUsuario'] }} {{ session('user_info')['nombreUsuario'] }} {{ session('user_info')['apellidoUsuario'] }}! Aquí podrás administrar las diferentes ventanas de control interno de la aplicación de manera eficiente y segura.
                                </p>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
