<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Servicios</title>

    <!-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> -->
</head>
<body>
    <h1>SERVICIOS</h1>
    <a href="/servicio/create">Nuevo servicio</a>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Duracion</th>
                <th>Precio</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        @foreach ($servicios as $servicio)
        <tbody>
            <tr>
                <td>
                    <a href="/servicio/{{ $servicio->id }}">
                        {{ $servicio->nombreServicio }}
                    </a>
                </td>
                <td>{{ $servicio->descripcionServicio }}</td>
                <td>{{ $servicio->duracionServicio }}</td>
                <td>{{ $servicio->precioServicio }}</td>
                <td>
                    <a href="/servicio/{{ $servicio->id }}/edit">Editar</a>
                </td>
                <td>
                    <form action="/servicio/{{ $servicio->id }}" method="POST">
                    @csrf
                    @method('DELETE')

                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</body>
</html>