<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-secondary p-5">
                    <p class="d-inline-block bg-dark text-primary py-1 px-4">CREA TU CITA</p>
                    <h1 class="text-uppercase mb-4">VEN Y CONOCE NUESTRAS INSTALACIONES Y DISFRUTA DE UN AGRADABLE SERVICIO</h1>
                    <p class="mb-4">OLYMPUS</p>
                        
                        <form action="/cita" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="nombreUsuarioCita" name="nombreUsuarioCita">
                                    <label for="nombreUsuarioCita">Nombre</label>
                                </div>
                            </div>
                            @error('nombreUsuarioCita')
                                <i>{{ $message}}</i>
                            @enderror
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-transparent" id="emailUsuarioCita" name="emailUsuarioCita">
                                    <label for="emailUsuarioCita">Email</label>
                                </div>
                            </div>
                            @error('emailUsuarioCita')
                                <i>{{ $message}}</i>
                            @enderror
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="date" class="form-control bg-transparent" id="fechaUsuarioCita" name="fechaUsuarioCita">
                                    <label for="fechaUsuarioCita">Fecha</label>
                                </div>
                            </div>
                            @error('fechaUsuarioCita')
                                <i>{{ $message}}</i>
                            @enderror
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="numeric" class="form-control bg-transparent" id="celularUsuarioCita" name="celularUsuarioCita"> 
                                    <label for="celularUsuarioCita">Celular</label>
                                </div>
                            </div>
                            @error('celularUsuarioCita')
                            <i>{{ $message}}</i>
                            @enderror
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="time" class="form-control bg-transparent" id="horaUsuarioCita" name="horaUsuarioCita">
                                    <label for="horaUsuarioCita">Hora</label>
                                </div>
                            </div>
                            @error('horaUsuarioCita')
                                <i>{{ $message}}</i>
                                @enderror
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Agendar Cita</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</body>
</html>