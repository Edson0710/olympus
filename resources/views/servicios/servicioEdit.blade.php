<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Servicio</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cssAdmin/styles.css')}}">
</head>
<body>
    <div class="container" id="advanced-search-form">
        <h1>Editar Servicio</h1>
        <form action="/servicio/{{ $servicio->id }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="nombreServicio">Nombre</label><br>
                <input class="form-control" type="text" name="nombreServicio" id="nombreServicio" placeholder="Nombre" autocomplete="off" value="{{ $servicio->nombreServicio }}"><br>
                @error('nombreServicio')
                    <i>{{ $message}}</i>
                @enderror
            </div>
            <div class="form-group">
                <label for="descripcionServicio">Descripcion</label><br>
                <input class="form-control" type="text" name="descripcionServicio" id="descripcionServicio" placeholder="Descripcion" autocomplete="off" value="{{ $servicio->descripcionServicio }}"><br>
                @error('descripcionServicio')
                    <i>{{ $message}}</i>
                @enderror
            </div>
            <div class="form-group">
                <label for="duracionServicio">Duracion Estimada</label><br>
                <input class="form-control" type="text" name="duracionServicio" id="duracionServicio" placeholder="Duracion" autocomplete="off" value="{{ $servicio->duracionServicio }}"><br>
                @error('duracionServicio')
                    <i>{{ $message}}</i>
                @enderror
            </div>
            <div class="form-group">
                <label for="precioServicio">Precio</label><br>
                <input class="form-control" type="number" step="0.01" min="0" max="999999" name="precioServicio" id="precioServicio" placeholder="Precio" autocomplete="off" value="{{ $servicio->precioServicio }}"><br>
                @error('precioServicio')
                    <i>{{ $message}}</i>
                @enderror
            </div>
            <!-- <label for="imagenServicio">Imagen Representativa</label><br>
            <input type="file" name="imagenServicio" id="imagenServicio"><br> -->
            
            <div class="clearfix"></div>
            <div class="row">
                <a class="btn btn-danger btn-lg btn-responsive" href="/servicio">Cancelar</a>
                <button type="submit" class="btn btn-dark btn-lg btn-responsive">Actualizar</button>
            </div>
        
        </form>
    </div>
</body>
</html>