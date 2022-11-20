@extends('layouts.main')
@section('title', 'Olympus - Productos')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Productos</h1>
    </div>
</div>
<!-- Page Header End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block bg-secondary text-primary py-1 px-4">Productos</p>
            <h1 class="text-uppercase">Ponemos estos Productos a tu disposición</h1>
        </div>
        <div class="row g-4">
            @foreach($productos as $producto)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                    <div class="ps-4">
                        <h3 class="text-uppercase mb-3">{{ $producto->nombre }}</h3>
                        <!--<span class="text-uppercase text-primary">Desde $80</span>-->
                        @foreach ($producto->productoimages as $image)
                            <img class="img-fluid img-thumbnail mb-3" src="{{ \Storage::url($image->ubicacionFileProducto) }}" alt="Imagen Producto">
                        @endforeach
                        <p><strong>Descripción: </strong>{{ $producto->descripcion }}</p>
                        <p><strong>Marca: </strong>{{ $producto->marca }}</p>
                        <p><strong>Tipo: </strong>{{ $producto->tipo }}</p>
                        <p><strong>Precio: </strong>${{ $producto->precio }}</p>
                    </div>

                    <a class="btn btn-square" href="{{ route('olympus.listas.productos')}}"><i class="fa fa-plus text-primary"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Service End -->

@stop