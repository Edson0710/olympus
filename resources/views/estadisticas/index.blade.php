@extends('adminlte::page')

@section('title', 'Citas')
<link href="{{asset('img/olympus-icon.png')}}" rel="icon">

@section('content_header')
<h1>Estadísticas</h1>

@stop

@section('content')
<style>
    .graficas{
        width: 100%;
        height: 100%;
    }
    .content-wrapper{
        overflow-y: scroll;
    }
</style>
@php
    use App\Models\Cita;
    use App\Models\CitaServicio;
    use Illuminate\Http\Request;
    use App\Models\Empleado;
    use App\Models\Servicio;

    $citasServicios = CitaServicio::all();
    $citas = Cita::all();
    $empleados = Empleado::all();
    $servicios = Servicio::all();
@endphp
<div class="row mb-5">
    <div class="col-md-6 mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Servicios más solicitados</h3>
            </div>
            <div class="card-body">
                <div class="graficas">
                    <canvas class="graficas" id="grafica1"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Ventas por servicio</h3>
            </div>
            <div class="card-body">
                <div class="graficas">
                    <canvas class="graficas" id="grafica2"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Empleados más solicitados</h3>
            </div>
            <div class="card-body">
                <div class="graficas">
                    <canvas class="graficas" id="grafica3"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Calificación de empleados</h3>
            </div>
            <div class="card-body">
                <div class="graficas">
                    <canvas class="graficas" id="grafica5"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Ventas mensuales 2022</h3>
            </div>
            <div class="card-body">
                <div class="graficas">
                    <canvas class="graficas" id="grafica4"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" type="text/css" href="{{asset('css/cssAdmin/styles.css')}}">
@stop

@section('js')
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
<script>
    $(document).ready(function() {

        // Servicios más solicitados
        grafica1();
        // Ventas por cada servicio
        grafica2();
        // Empleados más solicitados
        grafica3();
        // Calificación empleados
        grafica4();
        // Ventas por mes
        grafica5();

        function grafica1(){
            // Las etiquetas son las porciones de la gráfica
            const etiquetas = [
                @foreach ($servicios as $servicio)
                    "{{$servicio->nombreServicio}}", 
                @endforeach
            ]
            // Podemos tener varios conjuntos de datos. Comencemos con uno
            const datosIngresos = {
                data: [
                    @foreach ($servicios as $servicio)
                        @php
                            $cantidad = 0;
                            foreach ($citasServicios as $citaServicio) {
                                if ($citaServicio->servicio_id == $servicio->id) {
                                    $cantidad++;
                                }
                            }
                        @endphp
                        {{$cantidad}},
                    @endforeach
                ], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
                // Ahora debería haber tantos background colors como datos, es decir, para este ejemplo, 4
                backgroundColor: [
                    '#191919',
                    '#2D4263',
                    '#C84B31',
                    '#ECDBBA',
                    '#191919',
                    '#2D4263',
                    '#C84B31',
                    '#ECDBBA',
                ],// Color de fondo
                borderColor: [
                    '#191919',
                    '#2D4263',
                    '#C84B31',
                    '#ECDBBA',
                    '#191919',
                    '#2D4263',
                    '#C84B31',
                    '#ECDBBA',
                ],// Color del borde
                borderWidth: 1,// Ancho del borde
            };
            new Chart($('#grafica1'), {
                type: 'pie',// Tipo de gráfica. Puede ser dougnhut o pie
                data: {
                    labels: etiquetas,
                    datasets: [
                        datosIngresos,
                        // Aquí más datos...
                    ]
                },
            });
        }

        function grafica2(){
            // Las etiquetas son las que van en el eje X. 
            const etiquetas = [
                @foreach ($servicios as $servicio)
                    "{{$servicio->nombreServicio}}", 
                @endforeach
            ]
            // Podemos tener varios conjuntos de datos. Comencemos con uno
            const datosVentas2020 = {
                label: "Ventas por Servicio",
                data: [
                    @foreach ($servicios as $servicio)
                        @php
                            $cantidad = 0;
                            foreach ($citasServicios as $citaServicio) {
                                if ($citaServicio->servicio_id == $servicio->id) {
                                    $cantidad++;
                                }
                            }
                        @endphp
                        {{$cantidad * $servicio->precioServicio}},
                    @endforeach
                ], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
                backgroundColor: '#C84B31', // Color de fondo
                borderColor: '#C84B31', // Color del borde
                borderWidth: 1,// Ancho del borde
            };
            new Chart($('#grafica2'), {
                type: 'bar',// Tipo de gráfica
                data: {
                    labels: etiquetas,
                    datasets: [
                        datosVentas2020,
                        // Aquí más datos...
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }],
                    },
                }
            });
        }

        function grafica3(){
            // Las etiquetas son las porciones de la gráfica
            const etiquetas = [
                @foreach ($empleados as $empleado)
                    "{{$empleado->nombreEmpleado}}", 
                @endforeach
            ]
            // Podemos tener varios conjuntos de datos. Comencemos con uno
            const datosIngresos = {
                data: [
                    @foreach ($empleados as $empleado)
                        @php
                            $cantidad = 0;
                            foreach ($citas as $cita) {
                                if ($cita->empleado_id == $empleado->id) {
                                    $cantidad++;
                                }
                            }
                        @endphp
                        {{$cantidad}},
                    @endforeach
                ], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
                // Ahora debería haber tantos background colors como datos, es decir, para este ejemplo, 4
                backgroundColor: [
                    '#191919',
                    '#2D4263',
                    '#C84B31',
                    '#ECDBBA',
                    '#066163',
                    '#CDBE78',
                    '#191919',
                    '#2D4263',
                    '#C84B31',
                    '#ECDBBA',
                    '#066163',
                    '#CDBE78',
                ],// Color de fondo
                borderColor: [
                    '#191919',
                    '#2D4263',
                    '#C84B31',
                    '#ECDBBA',
                    '#066163',
                    '#CDBE78',
                    '#191919',
                    '#2D4263',
                    '#C84B31',
                    '#ECDBBA',
                    '#066163',
                    '#CDBE78',
                ],// Color del borde
                borderWidth: 1,// Ancho del borde
            };
            new Chart($('#grafica3'), {
                type: 'pie',// Tipo de gráfica. Puede ser dougnhut o pie
                data: {
                    labels: etiquetas,
                    datasets: [
                        datosIngresos,
                        // Aquí más datos...
                    ]
                },
            });
        }

        function grafica4(){
            // Las etiquetas son las que van en el eje X. 
            const etiquetas = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"]
            // Podemos tener varios conjuntos de datos. Comencemos con uno
            const datosVentas2022 = {
                label: "Ventas por Mes 2022",
                data: [
                    {{ $citas->whereBetween('fechaUsuarioCita', ['2022-01-01', '2022-01-31'])->sum('total') }},
                    {{ $citas->whereBetween('fechaUsuarioCita', ['2022-02-01', '2022-02-28'])->sum('total') }},
                    {{ $citas->whereBetween('fechaUsuarioCita', ['2022-03-01', '2022-03-31'])->sum('total') }},
                    {{ $citas->whereBetween('fechaUsuarioCita', ['2022-04-01', '2022-04-30'])->sum('total') }},
                    {{ $citas->whereBetween('fechaUsuarioCita', ['2022-05-01', '2022-05-31'])->sum('total') }},
                    {{ $citas->whereBetween('fechaUsuarioCita', ['2022-06-01', '2022-06-30'])->sum('total') }},
                    {{ $citas->whereBetween('fechaUsuarioCita', ['2022-07-01', '2022-07-31'])->sum('total') }},
                    {{ $citas->whereBetween('fechaUsuarioCita', ['2022-08-01', '2022-08-31'])->sum('total') }},
                    {{ $citas->whereBetween('fechaUsuarioCita', ['2022-09-01', '2022-09-30'])->sum('total') }},
                    {{ $citas->whereBetween('fechaUsuarioCita', ['2022-10-01', '2022-10-31'])->sum('total') }},
                    {{ $citas->whereBetween('fechaUsuarioCita', ['2022-11-01', '2022-11-30'])->sum('total') }},
                    {{ $citas->whereBetween('fechaUsuarioCita', ['2022-12-01', '2022-12-31'])->sum('total') }}
                ], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
                backgroundColor: '#2D4263', // Color de fondo
                borderColor: '#2D4263', // Color del borde
                borderWidth: 1,// Ancho del borde
            };
            new Chart($('#grafica4'), {
                type: 'bar',// Tipo de gráfica
                data: {
                    labels: etiquetas,
                    datasets: [
                        datosVentas2022,
                        // Aquí más datos...
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }],
                    },
                }
            });
        }

        function grafica5(){
            // Las etiquetas son las que van en el eje X. 
            const etiquetas = [
                @foreach ($empleados as $empleado)
                    "{{$empleado->nombreEmpleado}}", 
                @endforeach
            ];
            // Podemos tener varios conjuntos de datos. Comencemos con uno
            const datosVentas2020 = {
                label: "Calificación Empleado",
                data: [
                    @foreach($empleados as $empleado)
                    {{ $citas->where('empleado_id', $empleado->id)->avg('calificacionUsuarioCita') }},
                    @endforeach
                ], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
                backgroundColor: '#066163', // Color de fondo
                borderColor: '#066163', // Color del borde
                borderWidth: 1,// Ancho del borde
            };
            new Chart($('#grafica5'), {
                type: 'bar',// Tipo de gráfica
                data: {
                    labels: etiquetas,
                    datasets: [
                        datosVentas2020,
                        // Aquí más datos...
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }],
                    },
                }
            });
        }

    } );
</script>

@stop
