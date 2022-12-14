@extends('adminlte::page')

@section('title', 'Detalles del Servicio')

@section('content_header')
    <h1>Detalles del Servicio</h1>
@stop

@section('content')
<div class="container" id="advanced-search-form">
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
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cssAdmin/styles.css')}}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
    
