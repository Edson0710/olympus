@extends('layouts.main')
@section('title', 'Olympus - Cita')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">¡HAZ UNA CITA!</h1>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-secondary p-5">
                    <p class="d-inline-block bg-dark text-primary py-1 px-4">CREA TU CITA</p>
                    <h1 class="text-uppercase mb-4">VEN Y CONOCE NUESTRAS INSTALACIONES Y DISFRUTA DE UN AGRADABLE SERVICIO</h1>
                    <p class="mb-4">OLYMPUS</p>
                    <form action="/cita" method="POST" id="contacto">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="nombreUsuarioCita" name="nombreUsuarioCita">
                                    <label for="nombreUsuarioCita">Nombre</label>
                                </div>
                            </div>
                            @error('nombreUsuarioCita')
                                <i>{{ $message}}</i>
                            @enderror
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-transparent" id="emailUsuarioCita" name="emailUsuarioCita">
                                    <label for="emailUsuarioCita">Email</label>
                                </div>
                            </div>
                            @error('emailUsuarioCita')
                                <i>{{ $message}}</i>
                            @enderror
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="date" class="form-control bg-transparent" id="fechaUsuarioCita" name="fechaUsuarioCita" min="<?php $hoy=date("Y-m-d",strtotime("-1 days")); echo $hoy?>" onChange="sinDomingos();" onblur="obtenerfechafinf1();" required="required">
                                    <label for="fechaUsuarioCita">Fecha</label>
                                </div>
                            </div>
                            @error('fechaUsuarioCita')
                                <i>{{ $message}}</i>
                            @enderror
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="numeric" class="form-control bg-transparent" id="celularUsuarioCita" name="celularUsuarioCita"> 
                                    <label for="celularUsuarioCita">Celular</label>
                                </div>
                            </div>
                            @error('celularUsuarioCita')
                                <i>{{ $message}}</i>
                            @enderror
                            <!-- <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="time" class="form-control bg-transparent" name="horaUsuarioCita" step="1800" min="08:00" max="20:00">
                                    <label for="horaUsuarioCita">Hora</label>
                                </div>
                            </div> -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select type="text" class="form-control bg-transparent" name="horaUsuarioCita" id="time">
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
                                    <label for="horaUsuarioCita">Hora</label>
                                </div>
                            </div> 
                            @error('horaUsuarioCita')
                                <i>{{ $message}}</i>
                            @enderror

                            <div class="col-12">
                                <div class="form-floating">    
                                    <select type="text" class="form-control bg-transparent" id="empleado_id" name="empleado_id" value="{{ old('empleado_id') }}">
                                        <option selected disabled>Selecciona un barbero</option>
                                        @foreach ($empleados as $empleado)
                                            <option value="{{ $empleado->id }}">{{ $empleado->nombreEmpleado }}</option>
                                        @endforeach
                                    </select>
                                    <label for="empleado_id">Selecciona un barbero</label>
                                </div>  
                            </div>
                        
                            <div class="col-12">
                                <div class="form-floating">                                
                                    <select type="text" class="form-control bg-transparent" id="servicio_id" name="servicios_id[]" value="{{ old('servicio_id') }}" multiple>
                                        <option selected disabled>Selecciona un servicio</option>
                                        @foreach ($servicios as $servicio)
                                            <option value="{{ $servicio->id }}">{{ $servicio->nombreServicio }}</option>
                                        @endforeach
                                    </select>
                                    <label for="servicio_id">Selecciona un servicio</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" id="contactoSubmit">Agendar Cita</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100" style="min-height: 400px;">
                    <iframe class="google-map w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1866.6807584191063!2d-103.3265440445005!3d20.65486610581425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b23a9bbba80d%3A0xdacdb7fd592feb90!2sCentro%20Universitario%20de%20Ciencias%20Exactas%20e%20Ingenier%C3%ADas!5e0!3m2!1ses!2smx!4v1668381134602!5m2!1ses!2smx"
                    frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0" style="filter: grayscale(100%) invert(92%) contrast(83%); border: 0;"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@stop