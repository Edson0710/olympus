<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corte Edit</title>
</head>
<body>

    <div style="background-image: url('/images/fondo1Create.jpg'); background-size: cover;">

        <div class="reservation-form">
            <div class="container">
                <!-- <div class="text-center">
                    <h1 class="text-dark pt-3">Modo edición de empleados</h1>         
                </div>
                <div class="border-button pt-5 ps-4">
                    <a href="/empleado">Cancelar cambios</a>
                </div> -->
                <div class="row">
                    <div class="col-lg-12">
                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form id="reservation-form" action="/corte/{{ $corte->id }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h1>Editando corte {{ $corte->nombreCorte }}</h1>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <label for="nombreCorte">Nombre del Corte</label></br>
                                            <input type="text" name="nombreCorte" id="nombreCorte" placeholder="Ingresa el nombre del corte" autocomplete="off"  value="{{ $corte->nombreCorte }}" required>
                                            </br>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <label for="estiloCorte">Estilo del Corte</label></br>
                                            <input type="text" name="estiloCorte" id="estiloCorte" placeholder="Ingresa el estilo del corte" autocomplete="off" value="{{ $corte->estiloCorte }}" required>
                                            </br>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <label for="descripcionCorte">Descripción</label></br>
                                            <input type="text" name="descripcionCorte" id="descripcionCorte" placeholder="Ingresa la descripción del corte" autocomplete="off" value="{{ $corte->descripcionCorte }}" required>
                                            </br>
                                        </fieldset>
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <div class="border-button">
                                                <a href="/corte">Cancelar</a>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <button type="submit">Guardar</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>

</body>
</html>