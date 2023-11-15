<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="{{ asset('assets/cssLogin/cssLogin.css') }}">
    <!-- Agrega otros enlaces a tus estilos aquí -->
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <!-- Agrega la sección para el logo -->
                        <img src="{{ asset('img/logo/logo-quillay.png') }}" alt="Logo" width="400" height="400">
                        <h3>{{ __('Iniciar Sesión') }}</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" class="form">
                            @csrf

                            <div class="form-group">
                                <label for="CorreoElectronico">{{ __('Correo Electrónico') }}</label>
                                <input id="CorreoElectronico" type="email" class="form-control @error('email') is-invalid @enderror" name="CorreoElectronico" value="{{ old('CorreoElectronico') }}" required autocomplete="email" autofocus>
                                @error('CorreoElectronico')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="Contrasena">{{ __('Contraseña') }}</label>
                                <input id="Contrasena" type="password" class="form-control @error('password') is-invalid @enderror" name="Contrasena" required autocomplete="current-password">
                                @error('Contrasena')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Iniciar Sesión') }}
                                </button>
                            </div>

                            <div class="form-group text-center">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                            </div>

                            <div class="form-group text-center">
                                <a href="{{ route('login.google') }}" class="btn btn-danger btn-block">Iniciar sesión con Google</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Agrega tus scripts aquí -->

    <!-- Agrega enlaces a tus scripts de JavaScript aquí -->

</body>
</html>
