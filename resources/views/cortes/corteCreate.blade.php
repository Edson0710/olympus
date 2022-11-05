<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corte Create</title>
</head>

    <div style="background-image: url('/images/fondo1Create.jpg'); background-size: cover;">

        <div class="reservation-form">
            <div class="container">
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
                        <form id="reservation-form" action="/corte" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1>Crear Departamento</h1>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <label for="nombreCorte">Nombre del Corte</label></br>
                                        <input type="text" name="nombreCorte" id="nombreCorte" placeholder="Ingresa el nombre del corte" autocomplete="off"  value="{{ old('nombreCorte') }}" required>
                                        </br>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <label for="estiloCorte">Estilo del Corte</label></br>
                                        <input type="text" name="estiloCorte" id="estiloCorte" placeholder="Ingresa el estilo del corte" autocomplete="off"  value="{{ old('estiloCorte') }}" required>
                                        </br>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <label for="descripcionCorte">Descripción</label></br>
                                        <input type="text" name="descripcionCorte" id="descripcionCorte" placeholder="Ingresa una descripción sobre el corte" autocomplete="off" value="{{ old('descripcionCorte') }}" required>
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

</html>