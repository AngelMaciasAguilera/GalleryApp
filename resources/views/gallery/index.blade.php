<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="index-container">
        <h1>Galería de Fotos</h1>
    
        <div class="photo-list">
                <div class="photo-item">
                    <img src="" alt="Foto" class="photo-image">
                    <div class="photo-info">
                        <h3>Prueba</h3>
                        <p>Esta es una prueba</p>
                    </div>
                    <div class="photo-actions">
                        <a href="" class="btn">Ver</a>
                        <a href="" class="btn">Editar</a>
                        <form action="" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn">Eliminar</button>
                        </form>
                    </div>
                </div>
        </div>
    
        <a href="" class="create-btn">Agregar Nueva Foto</a>
    </div>
</body>
</html>


