@extends('adminlte::page')

@section('title', 'Agendar Cita')

@section('content_header')
    <h1>Agendar Cita</h1>
@stop

@section('content')
<div class="container" id="advanced-search-form">
    <form action="/cita" method="POST" id="contacto">
        @csrf
        <div class="form-group">
            <label for="nombreUsuarioCita">Nombre</label>
            <input type="text" class="form-control" id="nombreUsuarioCita" name="nombreUsuarioCita" value="{{ old('nombreUsuarioCita') }}">
            @error('nombreUsuarioCita')
                <i>{{ $message}}</i>
            @enderror
        </div>
        <div class="form-group">
            <label for="emailUsuarioCita">Email</label>
            <input type="email" class="form-control" id="emailUsuarioCita" name="emailUsuarioCita" value="{{ old('emailUsuarioCita') }}">
            @error('emailUsuarioCita')
                <i>{{ $message}}</i>
            @enderror
        </div>
        <div class="form-group">
            <label for="fechaUsuarioCita">Fecha</label>
            <input type="date" class="form-control" id="fechaUsuarioCita" name="fechaUsuarioCita" value="{{ old('fechaUsuarioCita') }}" onChange="sinDomingos();" onblur="obtenerfechafinf1();" required="required">
            @error('fechaUsuarioCita')
                <i>{{ $message}}</i>
            @enderror
        </div>
        <div class="form-group">
            <label for="celularUsuarioCita">Celular</label>
            <input type="text" class="form-control" id="celularUsuarioCita" name="celularUsuarioCita" value="{{ old('celularUsuarioCita') }}" maxlength="10">
            @error('celularUsuarioCita')
                <i>{{ $message}}</i>
            @enderror
        </div>
        <div class="form-group">
        <label for="horaUsuarioCita">Hora</label>
            <select type="text" class="form-control" name="horaUsuarioCita" id="time">
                <option selected disabled>Seleccione un horario</option>
                
                <option value="09:00:00">9:00 AM</option>
                <option value="09:30:00">9:30 AM</option>
                <option value="10:00:00">10:00 AM</option>
                <option value="10:30:00">10:30 AM</option>    
                <option value="11:00:00">11:00 AM</option>
                <option value="11:30:00">11:30 AM</option>
                <option value="12:00:00">12:00 PM</option>
                <option value="12:30:00">12:30 PM</option>
                <option value="13:00:00">1:00 PM</option>
                <option value="13:30:00">1:30 PM</option>
                <option value="14:00:00">2:00 PM</option>
                <option value="14:30:00">2:30 PM</option>
                <option value="15:00:00">3:00 PM</option>
                <option value="15:30:00">3:30 PM</option>        
                <option value="16:00:00">4:00 PM</option>
                <option value="16:30:00">4:30 PM</option>
                <option value="17:00:00">5:00 PM</option>
                <option value="17:30:00">5:30 PM</option>
                <option value="18:00:00">6:00 PM</option>
                <option value="18:30:00">6:30 PM</option>
                <option value="19:00:00">7:00 PM</option>
                <option value="19:30:00">7:30 PM</option>
                <option value="20:00:00">8:00 PM</option>
                <option value="20:30:00">8:30 PM</option>
            </select>   
        </div>
        @error('horaUsuarioCita')
            <i>{{ $message}}</i>
        @enderror
        <div class="clearfix"></div>
        <div class="row">
            <a class="btn btn-danger btn-lg btn-responsive" href="/cita">Cancelar</a>
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