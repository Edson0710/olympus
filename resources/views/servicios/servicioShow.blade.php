<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles Servicio</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cssAdmin/styles.css')}}">
</head>
<body>
    <div class="container" id="advanced-search-form">
        <h1>Detalles Servicio</h1>
        <div class="form-group">
            <label for="nombreServicio">Nombre</label><br>
            <input class="form-control" type="text" name="nombreServicio" id="nombreServicio" placeholder="Nombre" autocomplete="off" value="{{ $servicio->nombreServicio }}" disabled><br>
        </div>
        <div class="form-group">
            <label for="descripcionServicio">Descripcion</label><br>
            <input class="form-control" type="text" name="descripcionServicio" id="descripcionServicio" placeholder="Descripcion" autocomplete="off" value="{{ $servicio->descripcionServicio }}" disabled><br>
        </div>
        <div class="form-group">
            <label for="duracionServicio">Duracion Estimada</label><br>
            <input class="form-control" type="text" name="duracionServicio" id="duracionServicio" placeholder="Duracion" autocomplete="off" value="{{ $servicio->duracionServicio }}" disabled><br>
        </div>
        <div class="form-group">
            <label for="precioServicio">Precio</label><br>
            <input class="form-control" type="number" step="0.01" min="0" max="999999" name="precioServicio" id="precioServicio" placeholder="Precio" autocomplete="off" value="{{ $servicio->precioServicio }}" disabled><br>
        </div>
        <div class="clearfix"></div>
        <a class="btn btn-dark btn-lg btn-responsive" href="/servicio">Regresar</a>
    </div>
</body>
</html>