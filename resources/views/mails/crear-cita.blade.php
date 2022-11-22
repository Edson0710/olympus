{{-- <h1>Confirmación de cita</h1>
<p>Estimado(a) {{ $cita['nombreUsuarioCita'] }},</p>
<p>Gracias por agendar tu cita con nosotros, te recordamos que tu cita es el día {{ $cita['fechaUsuarioCita'] }} a las {{ $cita['horaUsuarioCita'] }}.</p>
<p>Te esperamos.</p>
<p>Saludos cordiales.</p>
<p>Equipo Olympus.</p> --}}
<style>
    .container {
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
        font-family: Arial, Helvetica, sans-serif;
    }
    .container .header {
        background-color: #BC2606;
        color: #fff;
        padding: 20px;
        text-align: center;
        border-radius: 10px 10px 0 0;
    }
    .container .header h1 {
        margin: 0;
    }
    .container .content {
        padding: 20px;
    }
    .container .content p {
        margin: 0;
    }
    .container .footer {
        background-color: #0611BC;
        color: #fff;
        padding: 20px;
        text-align: center;
        border-radius: 0 0 10px 10px;
    }
    .container .footer p {
        margin: 0;
    }
</style>

<div class="container">
    <div class="header">
        <h1>Resumen de tu cita</h1>
    </div>
    <div class="content">
        <p>Estimado(a) <b>{{ $cita['nombreUsuarioCita'] }}</b>,</p><br>
        <p>Gracias por agendar tu cita con nosotros, te recordamos que tu cita es el día <b>{{ $cita['fechaUsuarioCita'] }}</b> a las <b>{{ $cita['horaUsuarioCita'] }}</b>.</p><br>
        <p><b>Servicios: </b></p>
        <ul>
            @foreach ($servicios as $servicio)
                <li>{{ $servicio }}</li>
            @endforeach
        </ul>
        <br>
        <p><b>Barbero: </b>{{$empleado}}</p><br>
        <p>Te esperamos.</p><br>
        <p>Saludos cordiales.</p>
    </div>
    <div class="footer">
        <p><b>Equipo Olympus</b></p>
    </div>
</div>
