<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cssAdmin/styles.css')}}">
    <title>Detalles del Empleado</title>
</head>
<body>
<div class="container" id="advanced-search-form">
  <h1>Detalles del Empleado</h1>
  <div class="form-group">
      <label for="nombreEmpleado">Nombre Completo</label>
      <input type="text" name="nombreEmpleado" class="form-control" placeholder="Nombre Completo" id="nombreEmpleado" value="{{ $empleado->nombreEmpleado }}" disabled>
  </div>
            
  <div class="form-group">
      <label for="rolEmpleado">Rol</label>
      <input type="text" name="rolEmpleado" class="form-control" placeholder="Rol del Empleado" id="rolEmpleado" value="{{ $empleado->rolEmpleado }}" disabled>
  </div>
            
  <div class="form-group">
      <label for="generoEmpleado">Género</label>
      <input type="text" id="rolEmpleado" name="generoEmpleado"  class="form-control" value="{{ $empleado->generoEmpleado }}" disabled> 
  </div>
            
  <div class="form-group">
      <label for="telefonoEmpleado">Teléfono</label>
      <input type="text" name="telefonoEmpleado" class="form-control" placeholder="Número de teléfono" id="telefonoEmpleado" value="{{ $empleado->curpEmpleado }}" disabled>
  </div>
  <div class="form-group">
      <label for="curpEmpleado">CURP</label>
      <input type="text" name="curpEmpleado" class="form-control" placeholder="" id="curpEmpleado" value="{{ $empleado->curpEmpleado }}" disabled>
  </div>
  <div class="form-group">
      <label for="fecha_NacEmpleado">Fecha de Nacimiento</label>
      <input type="date" name="fecha_NacEmpleado" class="form-control" placeholder="00/00/0000" id="fecha_NacEmpleado" value="{{ $empleado->fecha_NacEmpleado }}" disabled>
  </div>
  <!-- <div class="form-group">
      <label for="imagenEmpleado">Imagen de Empleado</label>
      <input type="text" name="imagenEmpleado"class="form-control" id="imagenEmpleado" value="{{ $empleado->imagenEmpleado }}" disabled>
      @error('fecha_NacEmpleado')
          <i>{{ $message}}</i>
      @enderror
  </div> -->
  <div class="clearfix"></div>
  <div class="row">
      <a class="btn btn-dark btn-lg btn-responsive" href="/empleado">Regresar</a>
  </div>      
</div>
</body>
</html>
