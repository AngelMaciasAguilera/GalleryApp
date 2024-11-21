<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
</head>
<body>
    <div class="container">
        <h1>Crear Cuenta</h1>
        <div class="message-container">
            <!-- para mostrar el mensaje de error -->
            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first() }}
                </div>
            @endif
        </div>
        <form method="POST" action="{{ route('dosignin') }}">
            @csrf

            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" value="{{old('name')}}" id="name" name="name" placeholder="Tu nombre" required>
            </div>

            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" value="{{old('email')}}" id="email" name="email" placeholder="Tu correo" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Tu contraseña" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirmar Contraseña</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Repite tu contraseña" required>
            </div>

            <button type="submit" class="btn">Registrarse</button>
        </form>

        <div class="login-link">
            <p>¿Ya tienes una cuenta? <a href="{{ route('login') }}">¡Inicia sesión!</a></p>
        </div>
    </div>
</body>
</html>
