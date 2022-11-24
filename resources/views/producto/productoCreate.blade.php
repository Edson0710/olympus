@extends('adminlte::page')

@section('title', 'Registrar Producto')
<link href="{{asset('img/olympus-icon.png')}}" rel="icon">

@section('content_header')
<h1>Añadir Producto</h1>
@stop

@section('content')
<div class="card-body">
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        <i class="fas fa-exclamation-triangle"></i>
        <strong>¡Por favor!</strong> {{ $error }}
    </div>
    @endforeach
    @endif

    <form action="/producto" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" id="nombre" value="{{ $nombre ?? old('nombre') }}">
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input type="text" name="descripcion" class="form-control" placeholder="Descripción" id="descripcion" value="{{ $descripcion ?? old('descripcion') }}">
        </div>

        <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" name="marca" class="form-control" placeholder="Marca" id="marca" value="{{ $marca ?? old('marca') }}">
        </div>

        <div class="form-group">
            <label for="tipo">Tipo</label>
            <select name="tipo" class="form-control" required>
                <option selected disabled>Seleccione una opción</option>
                <option value="Dama">Dama</option>
                <option value="Caballero">Caballero</option>
                <option value="Unisex">Unisex</option>
            </select>
        </div>

        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" step="0.10" name="precio" class="form-control" placeholder="Precio" id="precio" value="{{ $precio ?? old('precio') }}">
        </div>

        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="number" step="1" name="cantidad" class="form-control" placeholder="Cantidad" id="cantidad" value="{{ $cantidad ?? old('cantidad') }}">
        </div>

        <div class="form-group">
            <fieldset>
                <label for="imagen" class="form-label">Sube una imagen del Producto</label><br>
                <input type="file" name="imagen" id="imagen">
                </br>
            </fieldset>
        </div>

        <div class="clearfix"></div>

        <div class="container text-center">
            <div class="row">
                <div class="col-sm">
                    <a class="btn btn-danger btn-lg btn-responsive px-3" href="/producto">Cancelar</a>
                    <button type="submit" class="btn btn-success btn-lg btn-responsive px-3">Guardar</button>
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
<script>
    console.log('Hi!');
</script>
@stop