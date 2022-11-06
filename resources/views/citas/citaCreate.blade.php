<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('css/cssAdmin/styles.css')}}">
        <title>Olympus - Agendar-Cita</title>
    </head>

    <body>
        <div class="container" id="advanced-search-form">
            <h2>Agendar Cita</h2>
            <form action="/cita" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombreUsuarioCita">Nombre</label>
                    <input type="text" class="form-control" id="nombreUsuarioCita" name="nombreUsuarioCita" value="{{ old('nombreUsuarioCita') }}">
                    @error('nombreUsuarioCita')
                        <i>{{ $message}}</i>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="emailUsuarioCita">Email</label>
                    <input type="email" class="form-control" id="emailUsuarioCita" name="emailUsuarioCita" value="{{ old('emailUsuarioCita') }}">
                    @error('emailUsuarioCita')
                        <i>{{ $message}}</i>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="fechaUsuarioCita">Fecha</label>
                    <input type="date" class="form-control" id="fechaUsuarioCita" name="fechaUsuarioCita" value="{{ old('fechaUsuarioCita') }}">
                    @error('fechaUsuarioCita')
                        <i>{{ $message}}</i>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="celularUsuarioCita">Celular</label>
                    <input type="text" class="form-control" id="celularUsuarioCita" name="celularUsuarioCita" value="{{ old('celularUsuarioCita') }}">
                    @error('celularUsuarioCita')
                        <i>{{ $message}}</i>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="horaUsuarioCita">Hora</label>
                    <input type="time" class="form-control" id="horaUsuarioCita" name="horaUsuarioCita" value="{{ old('horaUsuarioCita') }}">
                    @error('horaUsuarioCita')
                        <i>{{ $message}}</i>
                    @enderror
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <a class="btn btn-danger btn-lg btn-responsive" href="/cita">Cancelar</a>
                    <button type="submit" class="btn btn-dark btn-lg btn-responsive">Guardar</button>
                </div>
            </form>
        </div>
    </body>
</html>