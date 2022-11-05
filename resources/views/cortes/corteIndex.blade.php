<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corte Index</title>
</head>
<body>

<div class="container mt-5 pt-5">
    <div class="text-center">
        <h1 class="text-dark pt-3">Listado de Cortes</h1>         
    </div>
    <div class="border-button pt-5 ps-4">
        <a href="/corte/create">Añadir nuevo Corte</a>
    </div>
    <div class="container-fluid mt-1 px-4">
        <div class="table-responsive">
            <div class="row">
                <div class="col">
                    <table border="1" class="table table-bordered table-striped table-hover">
                        <thead class="table-dark">
                            <tr class="text-center">
                                <th scope="col">Nombre Corte</th>
                                <th scope="col">Estilo</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        @foreach ($cortes as $corte)
                        <tbody>
                            <tr class="text-dark text-center">
                                <td class="table-dark">
                                    <a href="/corte/{{ $corte->id }}">
                                        {{ $corte->nombreCorte }}
                                    </a>
                                </td>
                                <td>{{ $corte->estiloCorte }}</td>
                                <td>{{ $corte->descripcionCorte }}</td>
                    
                                <td>
                                    <a class="btn btn-woox text-light" href="/corte/{{ $corte->id }}/edit">Editar</a>
                                </td>
                                <td>
                                    <form action="/corte/{{ $corte->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input type="submit" class="btn btn-danger" value="Eliminar">
            
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>