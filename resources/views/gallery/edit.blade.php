<!-- resources/views/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Foto</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Editar Foto</h1>
        <form method="POST" action="{{ route('photos.update', $photo->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Título:</label>
                <input type="text" name="title" id="title" value="{{ $photo->title }}" required>
            </div>
            <div class="form-group">
                <label for="image">Foto:</label>
                <input type="file" name="image" id="image">
            </div>
            <button type="submit" class="btn">Actualizar</button>
        </form>
    </div>
</body>
</html>
