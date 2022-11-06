<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
</head>
<body>

    <div class="table-responsive-md">

    <div class="container">

        <h1>Listado de Empleados</h1>

        <a class="btn btn-primary" href="/empleado/create">Registrar Empleado</a>
        <br><br>
        <table class="table" border="1">
            <tr>
                <th>Nombre Completo</th>
                <th>Rol</th>
                <th>Género</th>
                <th>Teléfono</th>
                <th>CURP</th>
                <th>Fecha de Nacimiento</th>
                <!-- <th>Imagen</th> -->
                <th>Editar</th>
                <th>Eliminar</th>
            
            </tr>
            @foreach($empleados as $empleado)
            <tr>
                <td>
                    <!--Nos dirigira al metodo show del controlador -->
                    <a href="/empleado/{{ $empleado->id }}">   
                    {{ $empleado->nombreEmpleado }}
                    </a>

                </td>
                <td>{{ $empleado->rolEmpleado }}</td>
                <td>{{ $empleado->generoEmpleado }}</td>
                <td>{{ $empleado->telefonoEmpleado }}</td>
                <td>{{ $empleado->curpEmpleado }}</td>
                <td>{{ $empleado->fecha_NacEmpleado }}</td>
                <!-- <td>{{ $empleado->imagenEmpleado }}</td> -->

                <td>
                    <!--Nos dirigira al metodo edit del controlador -->
                    <a class="btn btn-warning" href="/empleado/{{ $empleado->id }}/edit">   
                    Editar
                    </a>

                </td>

                <td> 
                    <!--action lo manda al método DELETE-->
                    <form method="POST" action="/empleado/{{ $empleado->id }}">

                        <!-- Nos permite realizar la operación desde html-->
                        @csrf
                        @method('DELETE')

                        <input type=submit class="btn btn-danger" value="Eliminar">
                    </form>

                </td>
            </tr>

            @endforeach
        </table>
    </div>

    </section><!-- End Hero -->
    
</body>
</html>