<!-- resources/views/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $photo->title }}</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>{{ $photo->title }}</h1>
        <img src="{{ asset('storage/' . $photo->path) }}" alt="{{ $photo->title }}" class="photo-view">
        <p>{{ $photo->description }}</p>
        <a href="{{ route('photos.edit', $photo->id) }}" class="btn">Editar</a>
        <form method="POST" action="{{ route('photos.destroy', $photo->id) }}" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
        <a href="{{ route('photos.index') }}" class="btn">Volver</a>
    </div>
</body>
</html>
