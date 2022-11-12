@extends('adminlte::page')

@section('title', 'Registrar Corte')

@section('content_header')
    <h1>Registrar Corte</h1>
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

    <form action="/corte" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombreCorte">Nombre del Corte</label>
            <input type="text" class="form-control"  name="nombreCorte" id="nombreCorte" placeholder="Ingresa el nombre del corte" autocomplete="off"  value="{{ old('nombreCorte') }}" >
        </div>

        <div class="form-group">  
            <label for="estiloCorte">Estilo del Corte</label>
            <input type="text" class="form-control"  name="estiloCorte" id="estiloCorte" placeholder="Ingresa el estilo del corte" autocomplete="off"  value="{{ old('estiloCorte') }}" > 
        </div>

        <div class="form-group">    
            <label for="descripcionCorte">Descripción</label>
            <input type="text" class="form-control" name="descripcionCorte" id="descripcionCorte" placeholder="Ingresa una descripción sobre el corte" autocomplete="off" value="{{ old('descripcionCorte') }}" > 
        </div>

        <div class="clearfix"></div>

        <div class="container text-center">
            <div class="row">
                <div class="col-sm">
                    <a class="btn btn-danger btn-lg btn-responsive px-3" href="/corte">Cancelar</a> 
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
    <script> console.log('Hi!'); </script>
@stop