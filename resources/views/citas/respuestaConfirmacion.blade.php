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
    .container .content h3 {
        margin: 0;
        text-align: center;
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
    #botones {
        display: flex;
        align-items: center;
        justify-content: center;
    }

</style>

<div class="container">
    <div class="header">
        <h1>Confirmación de cita</h1>
    </div>
    <div class="content">
        @if ($status == 1)
            <h3>La cita ha sido confirmada</h3>
        @else
            <h3>La cita ha sido cancelada</h3>
        @endif
    </div>
    <div class="footer">
        <p><b>Equipo Olympus</b></p>
    </div>
</div>
