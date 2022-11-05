<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Servicio</title>
</head>
<body>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>Editar {{ $servicio->nombreServicio }}</h1>
    <form action="/servicio/{{ $servicio->id }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="nombreServicio">Nombre</label><br>
        <input type="text" name="nombreServicio" id="nombreServicio" placeholder="Nombre" autocomplete="off" value="{{ $servicio->nombreServicio }}"><br>
        
        <label for="descripcionServicio">Descripcion</label><br>
        <input type="text" name="descripcionServicio" id="descripcionServicio" placeholder="Descripcion" autocomplete="off" value="{{ $servicio->descripcionServicio }}"><br>
        
        <label for="duracionServicio">Duracion Estimada</label><br>
        <input type="text" name="duracionServicio" id="duracionServicio" placeholder="Duracion" autocomplete="off" value="{{ $servicio->duracionServicio }}"><br>
        
        <label for="precioServicio">Precio</label><br>
        <input type="number" step="0.01" min="0" max="999999" name="precioServicio" id="precioServicio" placeholder="Precio" autocomplete="off" value="{{ $servicio->precioServicio }}"><br>
        
        <!-- <label for="imagenServicio">Imagen Representativa</label><br>
        <input type="file" name="imagenServicio" id="imagenServicio"><br> -->
        <a href="/servicio">Cancelar</a>
        
        <button type="submit">Guardar</button>
    
    </form>
</body>
</html>