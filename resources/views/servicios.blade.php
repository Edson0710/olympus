@extends('layouts.main')
@section('title', 'Olympus - Servicios')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Servicios</h1>
    </div>
</div>
<!-- Page Header End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block bg-secondary text-primary py-1 px-4">Servicios</p>
            <h1 class="text-uppercase">¿Qué es lo que ofrecemos?</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                    <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                        <img class="img-fluid" src="{{asset('img/haircut.png')}}" alt="">
                    </div>
                    <div class="ps-4">
                        <h3 class="text-uppercase mb-3">Corte de cabello</h3>
                        <p>Elige entre nuestros diseños o coméntanos tu idea y la cumpliremos.</p>
                        <!--<span class="text-uppercase text-primary">Desde $80</span>-->
                    </div>
                    <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                    <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                        <img class="img-fluid" src="{{asset('img/beard-trim.png')}}" alt="">
                    </div>
                    <div class="ps-4">
                        <h3 class="text-uppercase mb-3">Recorte de barba</h3>
                        <p>Haz lucir mejor tu barba con unos recortes al gusto.</p>
                        <!--<span class="text-uppercase text-primary">Desde $50</span>-->
                    </div>
                    <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                    <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                        <img class="img-fluid" src="{{asset('img/mans-shave.png')}}" alt="">
                    </div>
                    <div class="ps-4">
                        <h3 class="text-uppercase mb-3">Afeitado</h3>
                        <p>Luce una piel espectacular con nuestros afeitados hechos con las mejores navajas del mercado.</p>
                        <!--<span class="text-uppercase text-primary">Desde $50</span>-->
                    </div>
                    <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                    <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                        <img class="img-fluid" src="{{asset('img/hair-dyeing.png')}}" alt="">
                    </div>
                    <div class="ps-4">
                        <h3 class="text-uppercase mb-3">Tinte para el cabello</h3>
                        <p>Luce un look diferente y freco con un color nuevo de cabello.</p>
                        <!--<span class="text-uppercase text-primary">Desde $150</span>-->
                    </div>
                    <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                    <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                        <img class="img-fluid" src="{{asset('img/mustache.png')}}" alt="">
                    </div>
                    <div class="ps-4">
                        <h3 class="text-uppercase mb-3">Diseño de bigote</h3>
                        <p>Luce un bigote diferente con nuestro catálogo o muéstranos tu idea y la replicaremos.</p>
                        <!--<span class="text-uppercase text-primary">Desde $50</span>-->
                    </div>
                    <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                    <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                        <img class="img-fluid" src="{{asset('img/stacking.png')}}" alt="">
                    </div>
                    <div class="ps-4">
                        <h3 class="text-uppercase mb-3">Servicio completo</h3>
                        <p>Conciéntete con un servicio completo que contiene: corte de cabello, barba, masaje facial y mascarilla, te aseguramos salir relajado.</p>
                        <!--<span class="text-uppercase text-primary">$300</span>-->
                    </div>
                    <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

@stop
