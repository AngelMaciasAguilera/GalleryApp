<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="index-container">
        <a href="{{route('login')}}" class="go-back-btn">Log out</a>
        <h1>Galería de Fotos</h1>
        <div class="image-gallery">
            <div class="photo-list">
                @foreach ($imagesuser as $image)
                <div class="photo-item">
                    <img src="data:image/{{ $image->type }};base64,{{ $image->image64 }}" alt="Foto" class="photo-image">
                    <div class="photo-info">
                        <h3>{{$image->original_name}}</h3>
                        <p>{{$image->created_at}}</p>
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
                @endforeach
            </div>
        </div>
        <a href="{{route('image.create')}}" class="create-btn">Agregar Nueva Foto</a>
    </div>    
</body>
</html>


