@extends('adminlte::page')

@section('title', 'Detalles Corte')
<link href="{{asset('img/olympus-icon.png')}}" rel="icon">

@section('content_header')
    <h1>Detalles Corte</h1>
@stop

@section('content')
    <div class="form-group">
        <label for="nombreCorte">Nombre del Corte</label>
        <input type="text" class="form-control" name="nombreCorte" id="nombreCorte" placeholder="Ingresa el nombre del corte" autocomplete="off"  value="{{ $corte->nombreCorte }}" disabled>
    </div>
    <div class="form-group">
        <label for="estiloCorte">Estilo del Corte</label>
        <input type="text" class="form-control" name="estiloCorte" id="estiloCorte" placeholder="Ingresa el estilo del corte" autocomplete="off" value="{{ $corte->estiloCorte }}" disabled>
    </div>
    <div class="form-group">
        <label for="descripcionCorte">Descripción</label>
        <input type="text" class="form-control" name="descripcionCorte" id="descripcionCorte" placeholder="Ingresa la descripción del corte" autocomplete="off" value="{{ $corte->descripcionCorte }}" disabled>  
    </div>

    <div class="form-group">
        <!-- Mandamos a llamar las instancias del modelo 'corte' con su relación 'corteimages' -->
        @foreach ($corte->corteimages as $image)
                <!-- Indicamos en donde se encuentra almacenada la imagen para mostrarla -->
            <img src="{{ \Storage::url($image->ubicacionFileCorte) }}" width="300px" alt="Imagen Corte">
        @endforeach
    </div>
    
    <div class="clearfix"></div>
    
    <div class="container text-center">
        <div class="row">
            <div class="col-sm">
                <a class="btn btn-dark btn-lg btn-responsive" href="/corte">Regresar</a> 
            </div>
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
