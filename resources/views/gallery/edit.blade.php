<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Foto</title>
    <link rel="stylesheet" href="{{ asset('assets/css/edit.css') }}">
</head>
<body>
    <a href="{{ url()->previous() }}" class="go-back-btn">Volver</a>
    <div class="container">
        <h1>Editar Foto</h1>
        
        <!-- Imagen previa -->
        <div class="image-preview">
            <img src="data:image/{{ $image->type }};base64,{{ $image->image64}}" alt="Foto" class="photo-image">
        </div>
        
        <form method="POST" action="{{ url('image/' . $image->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <!-- Campo de título -->
            <div class="form-group">
                <label for="title">Título:</label>
                <input type="text" name="title" id="title" value="{{ $image->original_name }}" required>
            </div>
            
            <!-- Botón de actualizar -->
            <button type="submit" class="btn">Actualizar</button>
        </form>
    </div>
</body>
</html>
