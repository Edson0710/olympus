@extends('adminlte::page')

@section('title', 'Editar Cita')

@section('content_header')
    <h1>Editar Cita</h1>
@stop

@section('content')
<div class="container" id="advanced-search-form">
    <form action="/cita/{{ $cita->id }}" method="POST" id="contacto">
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
            <input type="date" class="form-control" id="fechaUsuarioCita" name="fechaUsuarioCita" value="{{ old('fechaUsuarioCita') ?? $cita->fechaUsuarioCita }}" onChange="sinDomingos();" onblur="obtenerfechafinf1();" required="required">
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
            <select type="text" class="form-control" name="horaUsuarioCita" id="time">
                <option selected disabled>Seleccione un horario</option>
                
                <option value="09:00:00" {{ $cita->horaUsuarioCita == '09:00:00' ? 'selected' : '' }}>9:00 AM</option>
                <option value="09:30:00" {{ $cita->horaUsuarioCita == '09:30:00' ? 'selected' : '' }}>9:30 AM</option>
                <option value="10:00:00" {{ $cita->horaUsuarioCita == '10:00:00' ? 'selected' : '' }}>10:00 AM</option>
                <option value="10:30:00" {{ $cita->horaUsuarioCita == '10:30:00' ? 'selected' : '' }}>10:30 AM</option>    
                <option value="11:00:00" {{ $cita->horaUsuarioCita == '11:00:00' ? 'selected' : '' }}>11:00 AM</option>
                <option value="11:30:00" {{ $cita->horaUsuarioCita == '11:30:00' ? 'selected' : '' }}>11:30 AM</option>
                <option value="12:00:00" {{ $cita->horaUsuarioCita == '12:00:00' ? 'selected' : '' }}>12:00 PM</option>
                <option value="12:30:00" {{ $cita->horaUsuarioCita == '12:30:00' ? 'selected' : '' }}>12:30 PM</option>
                <option value="13:00:00" {{ $cita->horaUsuarioCita == '13:00:00' ? 'selected' : '' }}>1:00 PM</option>
                <option value="13:30:00" {{ $cita->horaUsuarioCita == '13:30:00' ? 'selected' : '' }}>1:30 PM</option>
                <option value="14:00:00" {{ $cita->horaUsuarioCita == '14:00:00' ? 'selected' : '' }}>2:00 PM</option>
                <option value="14:30:00" {{ $cita->horaUsuarioCita == '14:30:00' ? 'selected' : '' }}>2:30 PM</option>
                <option value="15:00:00" {{ $cita->horaUsuarioCita == '15:00:00' ? 'selected' : '' }}>3:00 PM</option>
                <option value="15:30:00" {{ $cita->horaUsuarioCita == '15:30:00' ? 'selected' : '' }}>3:30 PM</option>        
                <option value="16:00:00" {{ $cita->horaUsuarioCita == '16:00:00' ? 'selected' : '' }}>4:00 PM</option>
                <option value="16:30:00" {{ $cita->horaUsuarioCita == '16:30:00' ? 'selected' : '' }}>4:30 PM</option>
                <option value="17:00:00" {{ $cita->horaUsuarioCita == '17:00:00' ? 'selected' : '' }}>5:00 PM</option>
                <option value="17:30:00" {{ $cita->horaUsuarioCita == '17:30:00' ? 'selected' : '' }}>5:30 PM</option>
                <option value="18:00:00" {{ $cita->horaUsuarioCita == '18:00:00' ? 'selected' : '' }}>6:00 PM</option>
                <option value="18:30:00" {{ $cita->horaUsuarioCita == '18:30:00' ? 'selected' : '' }}>6:30 PM</option>
                <option value="19:00:00" {{ $cita->horaUsuarioCita == '19:00:00' ? 'selected' : '' }}>7:00 PM</option>
                <option value="19:30:00" {{ $cita->horaUsuarioCita == '19:30:00' ? 'selected' : '' }}>7:30 PM</option>
                <option value="20:00:00" {{ $cita->horaUsuarioCita == '20:00:00' ? 'selected' : '' }}>8:00 PM</option>
                <option value="20:30:00" {{ $cita->horaUsuarioCita == '20:30:00' ? 'selected' : '' }}>8:30 PM</option>
            </select>   
        </div>
        @error('horaUsuarioCita')
            <i>{{ $message}}</i>
        @enderror
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
