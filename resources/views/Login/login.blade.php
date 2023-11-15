<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Tus encabezados aquí -->
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>
                    <div class="card-body">
                        <!-- Formulario de inicio de sesión actualizado -->
                        <form method="POST" action="{{ route('login') }}">
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
                            
                            <!-- Resto del formulario -->

                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                
                                <!-- Agrega el enlace para iniciar sesión con Google -->
                                <a href="{{ route('login.google') }}" class="btn btn-danger">Login with Google</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts de JavaScript u otros scripts que desees incluir -->

</body>
</html>
