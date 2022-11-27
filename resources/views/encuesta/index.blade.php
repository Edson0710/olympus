@extends('layouts.main')
@section('title', 'Olympus - Encuesta')
@section('content')

<style>
    .fas{
        color: white;
        font-size: 40px;
        margin-inline: 0.5rem;
    }
    .fas:hover{
        color: #EB1616;
    }
</style>

<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        @if($cita->calificacionUsuarioCita == null)
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-uppercase">Encuesta de satisfacción</h1>
            </div>    
            <div class="row p-0 m-0">
                <div class="col-md-6">
                    <p  style="color: white"><b style="color: #EB1616">Barbero:</b> {{$empleado->nombreEmpleado}}</p>
                    <p  style="color: white"><b style="color: #EB1616">Fecha:</b> {{$fecha}}</p>
                    <p  style="color: white"><b style="color: #EB1616">Hora:</b> {{$hora}}</p>
                </div>
                <div class="col-md-6">
                    <p><b style="color: #EB1616">Servicios:</b>
                        <ul>
                            @foreach($servicios as $servicio)
                                <li style="color: white">{{$servicio->nombreServicio}}</li>
                            @endforeach
                        </ul>
                    </p>
                </div>
                <div class="col-12 text-center mt-5">
                    <i class="fas fa-dizzy" value="1"></i>
                    <i class="fas fa-frown" value="2"></i>
                    <i class="fas fa-meh" value="3"></i>
                    <i class="fas fa-smile" value="4"></i>
                    <i class="fas fa-laugh-beam" value="5"></i>
                </div>
            </div>     
        @else
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="text-uppercase">Muchas gracias por tu opinión</h1>
            <h5 class="text-uppercase">Tu calificación fue de: {{$cita->calificacionUsuarioCita}}</h5>
        </div> 
        @endif  
    </div>
</div>
<!-- Testimonial End -->
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
    $(document).ready(function(){
        $('.fas').click(function(){
            var valor = $(this).attr('value');
            var idCita = {{$cita->id}};
            console.log(valor);
            $.ajax({
                url: "{{route('enviarEncuesta')}}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    valor: valor,
                    idCita: idCita
                },
                success: function(response){
                    if(response == 1){
                        alert('Gracias por su respuesta');
                        window.location.href = "{{route('olympus.index')}}";
                    }
                }
            });
        });
    });
</script>

@stop
