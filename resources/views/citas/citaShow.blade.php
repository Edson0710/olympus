@extends('adminlte::page')

@section('title', 'Detalles de la Cita')

@section('content_header')
    <h1>Detalles de la Cita</h1>
@stop

@section('content')
<div class="container" id="advanced-search-form">
        <div class="form-group">
            <label for="nombreUsuarioCita">Nombre</label>
            <input type="text" class="form-control" id="nombreUsuarioCita" name="nombreUsuarioCita" value="{{ $cita->nombreUsuarioCita }}" disabled>
        </div>
        <div class="form-group">
            <label for="emailUsuarioCita">Email</label>
            <input type="text" class="form-control" id="emailUsuarioCita" name="emailUsuarioCita" value="{{ $cita->emailUsuarioCita }}" disabled>
        </div>
        <div class="form-group">
            <label for="fechaUsuarioCita">Fecha</label>
            <input type="text" class="form-control" id="fechaUsuarioCita" name="fechaUsuarioCita" value="{{ $cita->fechaUsuarioCita }}" disabled>
        </div>
        <div class="form-group">
            <label for="celularUsuarioCita">Celular</label>
            <input type="text" class="form-control" id="celularUsuarioCita" name="celularUsuarioCita" value="{{ $cita->celularUsuarioCita }}" disabled>
        </div>
        <div class="form-group">
            <label for="horaUsuarioCita">Hora</label>
            <input type="text" class="form-control" id="horaUsuarioCita" name="horaUsuarioCita" value="{{ $cita->horaUsuarioCita }}" disabled>
        </div>
        <div class="form-group">
            <label for="empleado_id">Barbero</label>
            <input type="text" class="form-control" id="empleado_id" name="empleado_id" value="{{ $cita->empleado->nombreEmpleado }}" disabled>
        </div>
        <div class="form-group">
            <label for="servicio_id">Servicios</label>
                @foreach($cita->servicios as $servicio)
                    <input type="text" class="form-control" id="servicio_id" name="servicio_id" value="{{ $servicio->nombreServicio }}" disabled>
                @endforeach
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <a class="btn btn-dark btn-lg btn-responsive" href="/cita">Regresar</a>
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