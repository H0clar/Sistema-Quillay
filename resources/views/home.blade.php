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
                        <div class="card-body">
                            <h3 class="text-center mb-4">Bienvenido al Sistema de Control Administrativo de Información Intranet</h3>

                            <div class="text-center">
                                <i class="fas fa-5x fa-user-circle"></i>
                            </div>

                            <p class="text-center mt-4">
                                ¡Felicitaciones! Has iniciado sesión en el sistema. Aquí podrás administrar las diferentes ventanas de control interno de la aplicación de manera eficiente y segura.
                            </p>

                            @if (session('status'))
                                <div class="alert alert-success mt-4" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
