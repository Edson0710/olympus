@extends('adminlte::page')

@section('title', 'Editar Cita')

@section('content_header')
    <h1>Editar Cita</h1>
@stop

@section('content')
<div class="container" id="advanced-search-form">
    <form action="/cita/{{ $cita->id }}" method="POST">
    @csrf
    @method('PATCH')
        <div class="form-group">
            <label for="nombreUsuarioCita">Nombre</label>
            <input type="text" class="form-control" id="nombreUsuarioCita" name="nombreUsuarioCita" value="{{ old('nombreUsuarioCita') ?? $cita->nombreUsuarioCita }}">
            @error('nombreUsuarioCita')
                <i>{{ $message}}</i>
            @enderror
        </div>
        <div class="form-group">
            <label for="emailUsuarioCita">Email</label>
            <input type="email" class="form-control" id="emailUsuarioCita" name="emailUsuarioCita" value="{{ old('emailUsuarioCita') ?? $cita->emailUsuarioCita }}">
            @error('emailUsuarioCita')
                <i>{{ $message}}</i>
            @enderror
        </div>
        <div class="form-group">
            <label for="fechaUsuarioCita">Fecha</label>
            <input type="date" class="form-control" id="fechaUsuarioCita" name="fechaUsuarioCita" value="{{ old('fechaUsuarioCita') ?? $cita->fechaUsuarioCita }}">
            @error('fechaUsuarioCita')
                <i>{{ $message}}</i>
            @enderror
        </div>
        <div class="form-group">
            <label for="celularUsuarioCita">Celular</label>
            <input type="text" class="form-control" id="celularUsuarioCita" name="celularUsuarioCita" value="{{ old('celularUsuarioCita') ?? $cita->celularUsuarioCita }}" maxlength="10">
            @error('celularUsuarioCita')
                <i>{{ $message}}</i>
            @enderror
        </div>
        <div class="form-group">
            <label for="horaUsuarioCita">Hora</label>
            <input type="time" class="form-control" id="horaUsuarioCita" name="horaUsuarioCita" value="{{ old('horaUsuarioCita') ?? $cita->horaUsuarioCita }}">
            @error('horaUsuarioCita')
                <i>{{ $message}}</i>
            @enderror
        </div>
        <div class="clearfix"></div>
            <div class="row">
            <a class="btn btn-danger btn-lg btn-responsive" href="/cita">Cancelar</a>
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
