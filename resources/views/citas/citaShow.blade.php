<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('css/cssAdmin/styles.css')}}">
        <title>Olympus - Detalle-Cita</title>
    </head>

    <body>
        <div class="container" id="advanced-search-form">
            <h2>Detalles Cita</h2>
                <div class="form-group">
                    <label for="nombreUsuarioCita">Nombre</label>
                    <input type="text" class="form-control" id="nombreUsuarioCita" name="nombreUsuarioCita" value="{{ $cita->nombreUsuarioCita }}" disabled>
                </div>
                <div class="form-group">
                    <label for="emailUsuarioCita">Email</label>
                    <input type="text" class="form-control" id="emailUsuarioCita" name="emailUsuarioCita" value="{{ $cita->emailUsuarioCita }}" disabled>
                </div>
                <div class="form-group">
                    <label for="fechaUsuarioCita">Fecha</label>
                    <input type="text" class="form-control" id="fechaUsuarioCita" name="fechaUsuarioCita" value="{{ $cita->fechaUsuarioCita }}" disabled>
                </div>
                <div class="form-group">
                    <label for="celularUsuarioCita">Celular</label>
                    <input type="text" class="form-control" id="celularUsuarioCita" name="celularUsuarioCita" value="{{ $cita->celularUsuarioCita }}" disabled>
                </div>
                <div class="form-group">
                    <label for="horaUsuarioCita">Hora</label>
                    <input type="text" class="form-control" id="horaUsuarioCita" name="horaUsuarioCita" value="{{ $cita->horaUsuarioCita }}" disabled>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <a class="btn btn-dark btn-lg btn-responsive" href="/cita">Regresar</a>
                </div>
            </form>
        </div>
    </body>
</html>