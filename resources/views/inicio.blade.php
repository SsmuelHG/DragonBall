<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dragon Ball API</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="titulo">
        <h1>Dragon Ball</h1>
    </div>
    
    <div class="subtitulo">
        <h1>Personajes</h1>
    </div>
<div class="estilo">
    @foreach($personajes as $personaje)
        <div class="personaje">
            <div class="id-personaje"><h2>{{ $personaje['id']}}</h2></div>
            <div class="nombre-personaje"><h2>{{ $personaje['name'] }}</h2></div>
            <div class="des-personaje"><span>{{ $personaje['description'] }}</span></div>
            <div class="imagenes"><img src="{{$personaje['avatar']}}" alt=""></div>
        </div>
    @endforeach
</div>

    <div class="subtitulo">
        <h1>Sagas</h1>
    </div>
<div class="estilo">
    @foreach($sagas as $saga)
        <div class ="saga">
            <div class="id-saga"><h2>{{ $saga['id']}}</h2></div>
            <div class="nombre-saga"><h2>{{ $saga['name']}}</h2></div>
            <div class="des-saga"><span>{{ $saga['description'] }}</span></div>
            <div class="imagenes"><img src="{{$saga['image']}}" alt=""></div>
        </div>
    @endforeach
</div>
</body>
</html>