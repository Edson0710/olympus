@extends('adminlte::page')

@section('title', 'Editar Corte')

@section('content_header')
    <h1>Editar Corte</h1>
@stop

@section('content')
<div class="container" id="advanced-search-form">
    <h1>Editar Corte</h1>

    <form action="/corte/{{ $corte->id }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="row">
            
            <div class="form-group">
                <label for="nombreCorte">Nombre del Corte</label>
                <input type="text" name="nombreCorte" id="nombreCorte" placeholder="Ingresa el nombre del corte" autocomplete="off"  value="{{ $corte->nombreCorte }}" required>
                @error('nombreCorte')
                    <i>{{ $message}}</i>
                @enderror
            </div>
            <div class="form-group">
                <label for="estiloCorte">Estilo del Corte</label>
                <input type="text" name="estiloCorte" id="estiloCorte" placeholder="Ingresa el estilo del corte" autocomplete="off" value="{{ $corte->estiloCorte }}" required>
                @error('estiloCorte')
                    <i>{{ $message}}</i>
                @enderror
            </div>
            <div class="form-group">
                <label for="descripcionCorte">Descripción</label>
                <input type="text" name="descripcionCorte" id="descripcionCorte" placeholder="Ingresa la descripción del corte" autocomplete="off" value="{{ $corte->descripcionCorte }}" required> 
                @error('descripcionCorte')
                    <i>{{ $message}}</i>
                @enderror 
            </div>
        </div>
        
        <div class="clearfix"></div>
        <div class="row">
            <a class="btn btn-danger btn-lg btn-responsive" href="/corte">Cancelar</a>
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
