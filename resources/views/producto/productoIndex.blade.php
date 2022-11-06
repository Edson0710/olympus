<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cssAdmin/styles.css')}}">
    <title>Productos</title>
</head>
<body>

    <div class="table-responsive-md">

    <div class="container">

        <h1>Listado de Productos</h1>

        <a class="btn btn-primary" href="/producto/create">Añadir Producto</a>
        <br><br>
        <table class="table" border="1">
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Marca</th>
                <th>Tipo</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            @foreach($productos as $producto)
            <tr>
                <td>
                    <a href="/producto/{{ $producto->id }}">   
                    {{ $producto->nombre }}
                    </a>
                </td>
                <td>{{ $producto->descripcion }}</td>
                <td>{{ $producto->marca }}</td>
                <td>{{ $producto->tipo }}</td>
                <td>${{ $producto->precio }}</td>
                <td>{{ $producto->cantidad }}</td>
                <td>
                    <a class="btn btn-warning" href="/producto/{{ $producto->id }}/edit">Editar</a>
                </td>
                <td>
                    <form method="POST" action="/producto/{{ $producto->id }}">
                        @csrf
                        @method('DELETE')
                        <input type=submit class="btn btn-danger" value="Eliminar">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    </section>
</body>
</html>