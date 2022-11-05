<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corte Show</title>
</head>
<body>

    <div class="container mt-5 pt-5">
        <div class="text-center">
            <h1 class="text-dark pt-3">Detalle del Corte</h1>         
        </div>
        <div class="border-button py-3 ps-4">
            <a href="/corte">Regresar</a>
        </div>
        <div class="justify-content-center">
            <div class="row">
                <div class="col-6">
                    <div class="image">
                        <img class="rounded" src="{{URL::asset('images/showDepartamento.jpg')}}" alt="No hay nada">
                    </div>
                </div>
                <div class="col-6">
                    <h2>{{ $corte->nombreCorte }}</h2>
                    <p>{{ $corte->descripcionCorte }}</p>
                    <ul class="info">
                        <li>
                            <label class="fw-bold" for="estiloCorte">Estilo Corte: </label><br>
                            <i class="fa-solid fa-user-md"></i> {{ $corte->estiloCorte }} </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</body>
</html>