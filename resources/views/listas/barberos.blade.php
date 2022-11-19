@extends('layouts.main')
@section('title', 'Olympus - Barberos')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Barberos</h1>
    </div>
</div>
<!-- Page Header End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block bg-secondary text-primary py-1 px-4">Barberos</p>
            <h1 class="text-uppercase">Conoce a nuestros barberos</h1>
        </div>
        <div class="row g-4">
            @foreach($empleados as $empleado)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="team-img position-relative overflow-hidden">
                        @foreach($empleado->empleadoimages as $image)
                            <img class="img-fluid" src="{{ \Storage::url($image->ubicacionFileEmpleado) }}" alt="">
                        @endforeach
                        <div class="team-social">
                            <a class="btn btn-square" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-secondary text-center p-4">
                        <h5 class="text-uppercase">{{ $empleado->nombreEmpleado }}</h5>
                        <span class="text-primary">{{ $$empleado->rolEmpleado }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team End -->

@stop
