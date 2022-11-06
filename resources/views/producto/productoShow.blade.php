<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cssAdmin/styles.css')}}">
    <title>Detalles del Producto</title>
</head>
<body>
<div class="container" id="advanced-search-form">
  <h1 style="text-align: center">Detalles del Producto</h1>
  <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" class="form-control" placeholder="Nombre" id="nombre" value="{{ $producto->nombre }}" disabled>
  </div>

  <div class="form-group">
      <label for="descripcion">Descripción</label>
      <textarea name="descripcion" id="descripcion" class="form-control" cols="30" rows="1" disabled>{{ $producto->descripcion }}</textarea>
  </div>

  <div class="form-group">
      <label for="marca">Marca</label>
      <input type="text" id="marca" name="marca"  class="form-control" placeholder="Marca" value="{{ $producto->marca }}" disabled> 
  </div>

  <div class="form-group">
      <label for="tipo">Tipo</label>
      <input type="text" name="tipo" class="form-control" placeholder="Tipo" id="tipo" value="{{ $producto->tipo }}" disabled>
  </div>

  <div class="form-group">
      <label for="precio">Precio</label>
      <input type="text" name="precio" class="form-control" placeholder="Precio" id="precio" value="${{ $producto->precio }}" disabled>
  </div>
  <div class="form-group">
      <label for="cantidad">Cantidad</label>
      <input type="text" name="cantidad" class="form-control" placeholder="Cantidad" id="cantidad" value="{{ $producto->cantidad }}" disabled>
  </div>

  <div class="clearfix"></div>
  <div class="row">
      <a class="btn btn-dark btn-lg btn-responsive" href="/producto">Regresar</a>
  </div>      
</div>
</body>
</html>