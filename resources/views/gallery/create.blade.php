<!-- resources/views/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Foto</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Subir Nueva Foto</h1>
        <form method="POST" action="{{ route('photos.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Título:</label>
                <input type="text" name="title" id="title" required>
            </div>
            <div class="form-group">
                <label for="image">Foto:</label>
                <input type="file" name="image" id="image" required>
            </div>
            <button type="submit" class="btn">Subir</button>
        </form>
    </div>
</body>
</html>
