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
            @foreach($servicios as $servicio)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                    <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                        <img class="img-fluid" src="{{asset('img/stacking.png')}}" alt="">
                    </div>
                    <div class="ps-4">
                        <h3 class="text-uppercase mb-3">{{ $servicio->nombreServicio }}</h3>
                        <p><strong>Descripción: </strong>{{ $servicio->descripcionServicio }}</p>
                        <span class="text-uppercase text-primary"> A solo ${{ $servicio->precioServicio }}</span>
                    </div>
                    <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Service End -->

@stop
