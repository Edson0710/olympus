@extends('adminlte::page')

@section('title', 'Editar Servicio')

@section('content_header')
    <h1>Editar Servicio</h1>
@stop

@section('content')
<!-- <div class="container" id="advanced-search-form">
    <h1>Editar Servicio</h1> -->
<div class="card-body">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                <i class="fas fa-exclamation-triangle"></i>
                <strong>¡Por favor!</strong> {{ $error }}
            </div>
        @endforeach
    @endif

    <form action="/servicio/{{ $servicio->id }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="nombreServicio">Nombre</label><br>
            <input class="form-control" type="text" name="nombreServicio" id="nombreServicio" placeholder="Nombre" autocomplete="off" value="{{ $servicio->nombreServicio }}"><br>
        </div>
        <div class="form-group">
            <label for="descripcionServicio">Descripcion</label><br>
            <input class="form-control" type="text" name="descripcionServicio" id="descripcionServicio" placeholder="Descripcion" autocomplete="off" value="{{ $servicio->descripcionServicio }}"><br>
        </div>
        <div class="form-group">
            <label for="precioServicio">Precio</label><br>
            <input class="form-control" type="number" step="0.01" min="0" max="999999" name="precioServicio" id="precioServicio" placeholder="Precio" autocomplete="off" value="{{ $servicio->precioServicio }}"><br>
        </div>

        <div class="clearfix"></div>

        <div class="container text-center">
            <div class="row">
                <div class="col-sm">
                    <a class="btn btn-danger btn-lg btn-responsive px-3" href="/servicio">Cancelar</a> 
                    <button type="submit" class="btn btn-success btn-lg btn-responsive px-3">Actualizar</button>
                </div>
            </div>
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
    