<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles Servicio</title>
</head>
<body>
    <h1>{{ $servicio->nombreServicio }}</h1>
    <p>{{ $servicio->descripcionServicio }}</p>

    <ul>
        <li>
            <label for="duracion">Duracion: </label><br>
            {{ $servicio->duracionServicio }}<br>
        </li>
        <li>
            <label for="precio">Precio: </label><br>
            {{ $servicio->precioServicio }}<br>
        </li>
    </ul>
</body>
</html>