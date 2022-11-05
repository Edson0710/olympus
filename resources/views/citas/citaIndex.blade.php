<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas</title>
</head>
<body>
        <section class="table-responsive-md">

            <div class="container">
                <h1>Listado de Citas</h1>
                <a class="btn btn-primary" href="/cita/create">Crear Nueva Cita</a>
                <br><br>
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Fecha</th>
                        <th>Celular</th>
                        <th>Hora</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    @foreach($citas as $cita)
                    <tr>
                        <td>{{ $cita->id }}</td>
                        <td>
                            <a href="/cita/{{ $cita->id }}">
                                {{ $cita->nombreUsuarioCita }}
                            </a>
                        </td>
                        <td>{{ $cita->emailUsuarioCita }}</td>
                        <td>{{ $cita->fechaUsuarioCita }}</td>
                        <td>{{ $cita->celularUsuarioCita }}</td>
                        <td>{{ $cita->horaUsuarioCita }}</td>
                        <td>
                            <a class="btn btn-warning" href="/cita/{{ $cita->id }}/edit">Editar</a>
                        </td>
                        <td>
                            <form action="/cita/{{ $cita->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </section>
</body>
</html>