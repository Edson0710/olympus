@extends('layouts.main')
@section('title', 'Olympus - Conócenos')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Conócenos</h1>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex flex-column">
                    <img class="img-fluid w-75 align-self-end" src="{{asset('img/about.jpg')}}" alt="">
                    <div class="w-50 bg-secondary p-5" style="margin-top: -25%;">
                        <h1 class="text-uppercase text-primary mb-3">32 Años</h1>
                        <h2 class="text-uppercase mb-0">Experiencia</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Conócenos</p>
                <h1 class="text-uppercase mb-4">Más que un simple corte de pelo. ¡Ven a visitarnos!</h1>
                <p>Nosotros no realizamos un simple corte de pelo, tu estilo es nuestra prioridad. Porque la belleza es para todos, ven a conocernos y llévate la mejor experiencia de tu vida con nuestro servicio completo.</p>
                <p class="mb-4">¡No olvides de agendar tu cita!</p>
                <div class="row g-4">
                    <div class="col-md-6">
                        <h3 class="text-uppercase mb-3">Desde 1990</h3>
                        <p class="mb-0">Nuestra experiencia habla por sí misma, más de 30 años nos avalan.</p>
                    </div>
                    <div class="col-md-6">
                        <h3 class="text-uppercase mb-3">1000+ Clientes satisfechos</h3>
                        <p class="mb-0">¡Ven a visitarnos y conviértete en un nuevo miebro de la familia, porque nuestros clientes son nuestra familia!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@stop
