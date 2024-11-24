<!-- resources/views/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $image->title }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/show.css') }}">
</head>
<body>
    <div class="container">
        <h1>{{ $image->title }}</h1>
        <img src="data:image/{{ $image->type }};base64,{{ $image->image64}}" alt="Foto" class="photo-image">
        <p>{{ $image->description }}</p>
        <a href="{{ url('image') }}" class="go-back-btn">Volver</a>
    </div>
</body>
</html>
