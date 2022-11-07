@extends('adminlte::page')

@section('title', 'Añadir Producto')

@section('content_header')
    <h1>Añadir Producto</h1>
@stop

@section('content')
<div class="container" id="advanced-search-form">
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
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cssAdmin/styles.css')}}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop