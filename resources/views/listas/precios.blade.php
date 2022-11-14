@extends('layouts.main')
@section('title', 'Olympus - Precios')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Precios</h1>
    </div>
</div>
<!-- Page Header End -->


<!-- Price Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                    <p class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">Precios</p>
                    <h1 class="text-uppercase mb-4">Lista de precios de nuestros servicios</h1>
                    <div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <h6 class="text-uppercase mb-0">Corte de cabello</h6>
                            <span class="text-uppercase text-primary">$150.00</span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <h6 class="text-uppercase mb-0">Recorte de barba</h6>
                            <span class="text-uppercase text-primary">$50.00</span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <h6 class="text-uppercase mb-0">Afeitadp</h6>
                            <span class="text-uppercase text-primary">$50.00</span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <h6 class="text-uppercase mb-0">Tinte para cabello</h6>
                            <span class="text-uppercase text-primary">$150.00</span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <h6 class="text-uppercase mb-0">Diseño de bigote</h6>
                            <span class="text-uppercase text-primary">$50.00</span>
                        </div>
                        <div class="d-flex justify-content-between py-2">
                            <h6 class="text-uppercase mb-0">Servicio completo</h6>
                            <span class="text-uppercase text-primary">$300.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100">
                    <img class="img-fluid h-100" src="{{asset('img/price.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Price End -->

@stop
