@extends('layouts.main')
@section('title', 'Olympus - Horario')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Horario</h1>
    </div>
</div>
<!-- Page Header End -->


<!-- Working Hours Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="h-100">
                    <img class="img-fluid h-100" src="{{asset('img/open.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                    <p class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">Horario</p>
                    <h1 class="text-uppercase mb-4">¡Agenda tu cita, te estamos esperando!</h1>
                    <div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <h6 class="text-uppercase mb-0">Lunes</h6>
                            <span class="text-uppercase">9:00 AM - 8:30 PM</span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <h6 class="text-uppercase mb-0">Martes</h6>
                            <span class="text-uppercase">9:00 AM - 8:30 PM</span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <h6 class="text-uppercase mb-0">Miércoles</h6>
                            <span class="text-uppercase">9:00 AM - 8:30 PM</span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <h6 class="text-uppercase mb-0">Jueves</h6>
                            <span class="text-uppercase">9:00 AM - 8:30 PM</span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <h6 class="text-uppercase mb-0">Viernes</h6>
                            <span class="text-uppercase">9:00 AM - 8:30 PM</span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <h6 class="text-uppercase mb-0">Sábado</h6>
                            <span class="text-uppercase">9:00 AM - 8:30 PM</span>
                        </div>
                        <div class="d-flex justify-content-between py-2">
                            <h6 class="text-uppercase mb-0">Domingos</h6>
                            <span class="text-uppercase text-primary">Cerrado</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Working Hours End -->

@stop
