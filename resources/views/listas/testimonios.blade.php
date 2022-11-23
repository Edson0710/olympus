@extends('layouts.main')
@section('title', 'Olympus - Testimonios')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Testimonios</h1>
    </div>
</div>
<!-- Page Header End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block bg-secondary text-primary py-1 px-4">Testimonios</p>
            <h1 class="text-uppercase">¡Mira lo que nuestros clientes opinan de nosotros!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='{{asset('img/testimonial-1.jpg')}}' alt=''>">
                <h4 class="text-uppercase">Javier López</h4>
                <p class="text-primary">Cliente</p>
                <span class="fs-5">Desde mi primera visita no he cambiado nunca de barbería, a veces que salgo de viaje por varias semanas prefiero esperearme que atenderme en otro lado.</span>
            </div>
            <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='{{asset('img/testimonial-2.jpg')}}' alt=''>">
                <h4 class="text-uppercase">Arturo Mendoza</h4>
                <p class="text-primary">Cliente</p>
                <span class="fs-5">Me encanta el sistema de citas que se maneja en esta barbería, me da la comodidad de ajustar mis tiempos y tener la tranquilidad que nadie ganará mi lugar.</span>
            </div>
            <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='{{asset('img/testimonial-3.jpg')}}' alt=''>">
                <h4 class="text-uppercase">Alexis Vega</h4>
                <p class="text-primary">Cliente</p>
                <span class="fs-5">Mi padre venía cuando el negocio comenzó y ahora yo sigo yendo, es una tradición atendernos en este lugar.</span>
            </div>
        </div>      
    </div>
</div>
<!-- Testimonial End -->

@stop
