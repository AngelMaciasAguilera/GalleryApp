<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Foto</title>
    <link rel="stylesheet" href="{{ asset('assets/css/create.css') }}">
</head>
<body>
    <a href="{{url('image')}}" class="go-back-btn"> Go back</a>
    <div class="container">
        <h1>Subir Nueva Foto</h1>
        <form action="{{url('image')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="image">Foto:</label>
                <input type="file" name="file" id="file" required>
            </div>
            <button type="submit" class="btn">Subir</button>
        </form>
    </div>
</body>
</html>
