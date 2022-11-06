@extends('adminlte::page')

@section('title', 'Editar Servicio')

@section('content_header')
    <h1>Editar Servicio</h1>
@stop

@section('content')
<div class="container" id="advanced-search-form">
    <h1>Editar Servicio</h1>
    <form action="/servicio/{{ $servicio->id }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="row">
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
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <a class="btn btn-danger btn-lg btn-responsive" href="/servicio">Cancelar</a>
            <button type="submit" class="btn btn-dark btn-lg btn-responsive">Actualizar</button>
        </div>
    </form>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cssAdmin/styles.css')}}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
    