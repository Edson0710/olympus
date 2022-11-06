<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cssAdmin/styles.css')}}">
    <title>Añadir Producto</title>
</head>
<body>

    <div class="container" id="advanced-search-form">
    <h2 style="text-align: center">Añadir Producto</h2>

        <form action="/producto" method="POST">

            @csrf

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" id="nombre" value={{ $nombre ?? old('nombre') }}>
                @error('nombre')
                    <i>{{ $message}}</i>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" class="form-control" placeholder="Descripción" id="descripcion" value={{ $descripcion ?? old('descripcion') }}>
                @error('descripcion')
                    <i>{{ $message}}</i>
                @enderror
            </div>

            <div class="form-group">
                <label for="marca">Marca</label>
                <input type="text" name="marca" class="form-control" placeholder="Marca" id="marca" value={{ $marca ?? old('marca') }}>
                @error('marca')
                    <i>{{ $message}}</i>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="tipo">Tipo</label>
                <select name="tipo" class="form-control" required>
                    <option selected disabled>Seleccione una opción</option>
                    <option value="Dama">Dama</option>
                    <option value="Caballero">Caballero</option>
                    <option value="Unisex">Unisex</option>
                </select>
                @error('tipo')
                    <i>{{ $message}}</i>
                @enderror
            </div>

            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" step="0.10" name="precio" class="form-control" placeholder="Precio" id="precio" value={{ $precio ?? old('precio') }}>
                @error('precio')
                    <i>{{ $message}}</i>
                @enderror
            </div>

            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input type="number" step="1" name="cantidad" class="form-control" placeholder="Cantidad" id="cantidad" value={{ $cantidad ?? old('cantidad') }}>
                @error('cantidad')
                    <i>{{ $message}}</i>
                @enderror
            </div>
        
            <div class="clearfix"></div>

            <div class="row">
                <a class="btn btn-danger btn-lg btn-responsive" href="/producto">Cancelar</a>
                <button type="submit" class="btn btn-dark btn-lg btn-responsive">Guardar</button>
            </div>
        </form>
    </div>
        
    </form>
    
</body>
</html>