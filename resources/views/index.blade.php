@extends('layouts.main')
@section('title', 'Olympus - Inicio')
@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('img/carousel-1.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                    <div class="mx-sm-5 px-5" style="max-width: 900px;">
                        <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown">¡Te haremos lucir increíble!</h1>
                        <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-map-marker-alt text-primary me-3"></i>Blvd. Gral. Marcelino García Barragán 1421, Olímpica, 44430 Guadalajara, Jal.</h4>
                    <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-phone-alt text-primary me-3"></i>+52 33 1143 5434</h4>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{asset('img/carousel-2.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                    <div class="mx-sm-5 px-5" style="max-width: 900px;">
                        <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown">¡Los mejores estilos del momento!</h1>
                        <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-map-marker-alt text-primary me-3"></i>Blvd. Gral. Marcelino García Barragán 1421, Olímpica, 44430 Guadalajara, Jal.</h4>
                        <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-phone-alt text-primary me-3"></i>+52 33 1143 5434</h4>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


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


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block bg-secondary text-primary py-1 px-4">Barberos</p>
            <h1 class="text-uppercase">Conoce a nuestros barberos</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/team-1.jpg')}}" alt="">
                        <div class="team-social">
                            <a class="btn btn-square" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-secondary text-center p-4">
                        <h5 class="text-uppercase">Leonardo Paredes</h5>
                        <span class="text-primary">Desvanecidos</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/team-2.jpg')}}" alt="">
                        <div class="team-social">
                            <a class="btn btn-square" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-secondary text-center p-4">
                        <h5 class="text-uppercase">Ricardo Reyes</h5>
                        <span class="text-primary">Tijeras</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/team-3.jpg')}}" alt="">
                        <div class="team-social">
                            <a class="btn btn-square" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-secondary text-center p-4">
                        <h5 class="text-uppercase">Ernesto de la Cruz</h5>
                        <span class="text-primary">Navaja</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/team-4.jpg')}}" alt="">
                        <div class="team-social">
                            <a class="btn btn-square" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-secondary text-center p-4">
                        <h5 class="text-uppercase">Borja Mendez</h5>
                        <span class="text-primary">Tintes</span>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


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
                            <h6 class="text-uppercase mb-0">Viernes</h6>
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
                <span class="fs-5">Mi padre venía cuando el negocio comenzó y ahora yo sigo viniendo, es una tradición atendernos en este lugar.</span>
            </div>
        </div>      
    </div>
</div>
<!-- Testimonial End -->

@stop
