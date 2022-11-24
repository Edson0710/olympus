@extends('adminlte::page')

@section('title', 'Agendar Cita')
<link href="{{asset('img/olympus-icon.png')}}" rel="icon">

@section('content_header')
    <h1>Agendar Cita</h1>
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

    <form action="/cita" method="POST" id="cita">
        @csrf
        <div class="form-group">
            <label for="nombreUsuarioCita">Nombre</label>
            <input type="text" class="form-control" id="nombreUsuarioCita" name="nombreUsuarioCita" value="{{ old('nombreUsuarioCita') }}">
        </div>
        <div class="form-group">
            <label for="emailUsuarioCita">Email</label>
            <input type="email" class="form-control" id="emailUsuarioCita" name="emailUsuarioCita" value="{{ old('emailUsuarioCita') }}">
        </div>
        <div class="form-group">
            <label for="fechaUsuarioCita">Fecha</label>
            <input type="date" class="form-control" id="fechaUsuarioCita" name="fechaUsuarioCita" value="{{ old('fechaUsuarioCita') }}" min="<?php $hoy=date("Y-m-d",strtotime("-1 days")); echo $hoy?>" onChange="sinDomingos();" onblur="obtenerfechafinf1();" required="required">
        </div>
        <div class="form-group">
            <label for="celularUsuarioCita">Celular</label>
            <input type="text" class="form-control" id="celularUsuarioCita" name="celularUsuarioCita" value="{{ old('celularUsuarioCita') }}" maxlength="10">
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
        <div class="form-group">
            <label for="empleado_id">Selecciona un barbero</label>
            <select class="form-control" id="empleado_id" name="empleado_id" value="{{ old('empleado_id') }}">
                <option selected disabled>Selecciona un barbero</option>
                @foreach ($empleados as $empleado)
                    <option value="{{ $empleado->id }}">{{ $empleado->nombreEmpleado }}</option>
                @endforeach
            </select>
        </div>

    
        <div class="form-group">
            <label for="servicio_id">Selecciona un servicio</label>
            <select class="form-control" id="servicio_id" name="servicios_id[]" value="{{ old('servicio_id') }}" multiple>
                <option selected disabled>Selecciona un servicio</option>
                @foreach ($servicios as $servicio)
                    <option value="{{ $servicio->id }}">{{ $servicio->nombreServicio }}</option>
                @endforeach
            </select>
        </div>

        <div class="clearfix"></div>
        <div class="container text-center">
            <div class="row">
                <div class="col-sm">
                    <a class="btn btn-danger btn-lg btn-responsive px-3" href="/cita">Cancelar</a> 
                    <button type="submit" id="citaSubmit" class="btn btn-success btn-lg btn-responsive px-3">Guardar</button>
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
    <script> console.log('Hi!'); 
    var elDate = document.getElementById('fechaUsuarioCita');
    var elForm = document.getElementById('cita');
    var elSubmit = document.getElementById('citaSubmit');

    function sinDomingos(){
        var day = new Date(elDate.value ).getUTCDay();
        // Días 0-6, 0 es Domingo 6 es Sábado
        elDate.setCustomValidity(''); // limpiarlo para evitar pisar el fecha inválida
        if( day == 0 ){
        elDate.setCustomValidity('Domingos no disponibles, por favor seleccione otro día');
        } else {
        elDate.setCustomValidity('');
        }
        if(!elForm.checkValidity()) {elSubmit.click()};
    }

    function obtenerfechafinf1(){
        sinDomingos();
    }
    </script>

@stop