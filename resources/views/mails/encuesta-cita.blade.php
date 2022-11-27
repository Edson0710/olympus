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
    .btn {
        padding: 10px;
        text-decoration: none;
        border-radius: 5px;
    }
    .btn-success {
        background-color: #28a745;
        color: #fff;
        margin-right: 20px;
    }
    .btn-danger {
        background-color: #dc3545;
        color: #fff;
    }   

    .btn-secondary {
        background-color: #6c757d;
        color: #fff;
    }

    #botones {
        display: flex;
        align-items: center;
        justify-content: center;
    }

</style>

<div class="container">
    <div class="header">
        <h1>Encuesta de satisfacción</h1>
    </div>
    <div class="content">
        <p>Estimado(a) <b>{{ $cita['nombreUsuarioCita'] }}</b>,</p><br>
        <p>Nos gustaría que califique su experiencia con nosotros, ya que su opinión nos ayuda a mejorar día a día.</p>
        <el> Su cita fue el día  <b>{{ $cita['fechaUsuarioCita'] }}</b> a las <b>{{ $cita['horaUsuarioCita'] }}</b>.</p><br>
        {{-- Botons para confirmar --}}
        <div id="botones">
            <a href="http://127.0.0.1:8000/encuesta/{{ $cita['id'] }}" class="btn btn-secondary">Contestar encuesta</a>
        </div>
    </div>
    <div class="footer">
        <p><b>Equipo Olympus</b></p>
    </div>
</div>
