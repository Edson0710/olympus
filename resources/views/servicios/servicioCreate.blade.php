<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Servicio</title>
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
    <h1>Crear Servicio</h1>
    <form action="/servicio" method="POST">
        @csrf
        <label for="nombreServicio">Nombre</label><br>
        <input type="text" name="nombreServicio" id="nombreServicio" placeholder="Nombre" autocomplete="off" value="{{ old('nombreServicio') }}"><br>
        
        <label for="descripcionServicio">Descripcion</label><br>
        <input type="text" name="descripcionServicio" id="descripcionServicio" placeholder="Descripcion" autocomplete="off" value="{{ old('descripcionServicio') }}"><br>
        
        <label for="duracionServicio">Duracion Estimada</label><br>
        <input type="text" name="duracionServicio" id="duracionServicio" placeholder="Duracion" autocomplete="off" value="{{ old('duracionServicio') }}"><br>
        
        <label for="precioServicio">Precio</label><br>
        <input type="number" step="0.01" min="0" max="999999" name="precioServicio" id="precioServicio" placeholder="Precio" autocomplete="off" value="{{ old('precioServicio') }}"><br>
        
        <label for="imagenServicio">Imagen Representativa</label><br>
        <input type="file" name="imagenServicio" id="imagenServicio"><br>
        
        <button type="submit">Guardar</button>
    
    </form>
</body>
</html>