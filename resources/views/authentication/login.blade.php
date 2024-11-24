<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <div class="message-container">
            @if(session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif

            <!-- para mostrar el mensaje de error -->
            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first() }}
                </div>
            @endif
        </div>
        <form action="{{route('dologin')}}">
            @csrf
            @method('GET')
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" value="{{old('email')}}" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>¿Eres nuevo? <a href="{{route('signin')}}">¡Regístrate!</a></p>
            </div>

        </form>
    </div>
</body>
</html>