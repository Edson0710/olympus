@extends('adminlte::page')

@section('title', 'Editar Producto')

@section('content_header')
    <h1>Editar Producto</h1>
@stop

@section('content')

<div class="container" id="advanced-search-form">
    <form action="/producto/{{ $producto->id }}" method="POST">

        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" id="nombre" value="{{ old('nombre') ?? $producto->nombre }}">
            @error('nombre')
                <i>{{ $message}}</i>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input type="text" name="descripcion" class="form-control" placeholder="Descripción" id="descripcion" value="{{ old('descripcion') ?? $producto->descripcion }}">
            @error('descripcion')
                <i>{{ $message}}</i>
            @enderror
        </div>

        <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" name="marca" class="form-control" placeholder="Marca" id="marca" value="{{ old('marca') ?? $producto->marca }}">
            @error('marca')
                <i>{{ $message}}</i>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <select name="tipo" class="form-control" required>
                <option selected disabled>Seleccione una opción</option>
                <option value="Dama" {{ $producto->tipo == 'Dama' ? 'selected' : '' }}>Dama</option>
                <option value="Caballero" {{ $producto->tipo == 'Caballero' ? 'selected' : '' }}>Caballero</option>
                <option value="Unisex" {{ $producto->tipo == 'Unisex' ? 'selected' : '' }}>Unisex</option>
            </select>
            @error('tipo')
                <i>{{ $message}}</i>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" step="0.10" name="precio" class="form-control" placeholder="Precio" id="precio" value="{{ old('precio') ?? $producto->precio }}">
            @error('precio')
                <i>{{ $message}}</i>
            @enderror
        </div>

        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="number" step="1" name="cantidad" class="form-control" placeholder="Cantidad" id="cantidad" value="{{ old('cantidad') ?? $producto->cantidad }}">
            @error('cantidad')
                <i>{{ $message}}</i>
            @enderror
        </div>
        
        <div class="clearfix"></div>

        <div class="row">
            <a class="btn btn-danger btn-lg btn-responsive" href="/producto">Cancelar</a>
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