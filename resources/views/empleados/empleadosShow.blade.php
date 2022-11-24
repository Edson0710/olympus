@extends('adminlte::page')

@section('title', 'Detalles del Empleado')
<link href="{{asset('img/olympus-icon.png')}}" rel="icon">

@section('content_header')
    <h1>Detalles del Empleado</h1>
@stop

@section('content')
    <div class="form-group">
        <label for="nombreEmpleado">Nombre Completo</label>
        <input type="text" name="nombreEmpleado" class="form-control" placeholder="Nombre Completo"
            id="nombreEmpleado" value="{{ $empleado->nombreEmpleado }}" disabled>
    </div>

    <div class="form-group">
        <label for="rolEmpleado">Rol</label>
        <input type="text" name="rolEmpleado" class="form-control" placeholder="Rol del Empleado" id="rolEmpleado"
            value="{{ $empleado->rolEmpleado }}" disabled>
    </div>

    <div class="form-group">
        <label for="generoEmpleado">Género</label>
        <input type="text" id="rolEmpleado" name="generoEmpleado" class="form-control"
            value="{{ $empleado->generoEmpleado }}" disabled>
    </div>

    <div class="form-group">
        <label for="telefonoEmpleado">Teléfono</label>
        <input type="text" name="telefonoEmpleado" class="form-control" placeholder="Número de teléfono"
            id="telefonoEmpleado" value="{{ $empleado->curpEmpleado }}" disabled>
    </div>
    <div class="form-group">
        <label for="curpEmpleado">CURP</label>
        <input type="text" name="curpEmpleado" class="form-control" placeholder="" id="curpEmpleado"
            value="{{ $empleado->curpEmpleado }}" disabled>
    </div>
    <div class="form-group">
        <label for="fecha_NacEmpleado">Fecha de Nacimiento</label>
        <input type="date" name="fecha_NacEmpleado" class="form-control" placeholder="00/00/0000"
            id="fecha_NacEmpleado" value="{{ $empleado->fecha_NacEmpleado }}" disabled>
    </div>
    <div class="form-group">
        <!-- Mandamos a llamar las instancias del modelo 'corte' con su relación 'corteimages' -->
        @foreach ($empleado->empleadoimages as $image)
                <!-- Indicamos en donde se encuentra almacenada la imagen para mostrarla -->
            <img src="{{ \Storage::url($image->ubicacionFileEmpleado) }}" width="300px" alt="Imagen Empleado">
        @endforeach
    </div>
    <!-- <div class="form-group">
  <label for="imagenEmpleado">Imagen de Empleado</label>
  <input type="text" name="imagenEmpleado"class="form-control" id="imagenEmpleado" value="{{ $empleado->imagenEmpleado }}" disabled>
  @error('fecha_NacEmpleado')
      <i>{{ $message}}</i>
  @enderror
</div> -->

    <div class="clearfix"></div>

    <div class="container text-center">
        <div class="row">
            <div class="col-sm">
                <a class="btn btn-dark btn-lg btn-responsive" href="/empleado">Regresar</a> 
            </div>
        </div>
    </div>
    </br> 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cssAdmin/styles.css')}}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
