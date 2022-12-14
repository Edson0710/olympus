@extends('adminlte::page')

@section('title', 'Detalles del Producto')

@section('content_header')
    <h1>Detalles del Producto</h1>
@stop

@section('content')
<div class="container" id="advanced-search-form">
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

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cssAdmin/styles.css')}}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop