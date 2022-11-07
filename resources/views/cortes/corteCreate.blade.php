@extends('adminlte::page')

@section('title', 'Registrar Corte')

@section('content_header')
    <h1>Registrar Corte</h1>
@stop

@section('content')

<div class="container" id="advanced-search-form">

    <form action="/corte" method="POST">
        @csrf
        <div class="row">
            <div class="form-group">
                <label for="nombreCorte">Nombre del Corte</label>
                <input type="text" class="form-control"  name="nombreCorte" id="nombreCorte" placeholder="Ingresa el nombre del corte" autocomplete="off"  value="{{ old('nombreCorte') }}" >
                @error('nombreCorte')
                        <i>{{ $message}}</i>
                @enderror
            </div>

            <div class="form-group">  
                <label for="estiloCorte">Estilo del Corte</label>
                <input type="text" class="form-control"  name="estiloCorte" id="estiloCorte" placeholder="Ingresa el estilo del corte" autocomplete="off"  value="{{ old('estiloCorte') }}" > 
                @error('estiloCorte')
                        <i>{{ $message}}</i>
                @enderror
            </div>

            <div class="form-group">    
                <label for="descripcionCorte">Descripción</label>
                <input type="text" class="form-control" name="descripcionCorte" id="descripcionCorte" placeholder="Ingresa una descripción sobre el corte" autocomplete="off" value="{{ old('descripcionCorte') }}" > 
                @error('descripcionCorte')
                        <i>{{ $message}}</i>
                @enderror
            </div>
        </div>
            <div class="clearfix"></div>
            <div class="row">
                <a class="btn btn-danger btn-lg btn-responsive" href="/corte">Cancelar</a>
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


</html>