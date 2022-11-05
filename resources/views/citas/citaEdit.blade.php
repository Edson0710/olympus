<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cita</title>
</head>
<body>
<section class="vh-100 bg-image" style="background-image: url('/img/createSneaker.jpg')">
    
    <div class="separar">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
            <a class="btn btn-dark" style="background-color:black" href="/cita">← Regresar</a>
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-5">    
                        <h2 class="text-uppercase text-center mb-5">Editar Cita</h2>

                        <form action="/cita/{{ $cita->id }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-outline mb-4">
                                <label class="form-label" for="nombreUsuarioCita">Nombre</label>
                                <input class="form-control form-control-lg" type="text" name="nombreUsuarioCita" id="nombreUsuarioCita" value="{{ old('nombreUsuarioCita') ?? $cita->nombreUsuarioCita }}">
                                @error('nombre')
                                    <i>{{ $message}}</i>
                                @enderror
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="emailUsuarioCita">Email</label>
                                <input class="form-control form-control-lg" type="text" name="emailUsuarioCita" id="emailUsuarioCita" value="{{ old('emailUsuarioCita') ?? $cita->emailUsuarioCita }}">
                                @error('marca')
                                    <i>{{ $message}}</i>
                                @enderror
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="fechaUsuarioCita">Fecha</label>
                                <input class="form-control form-control-lg" type="date" name="fechaUsuarioCita" id="fechaUsuarioCita" value="{{ old('fechaUsuarioCita') ?? $cita->fechaUsuarioCita }}">
                                @error('precio')
                                    <i>{{ $message}}</i>
                                @enderror
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="celularUsuarioCita">Celular</label>
                                <input class="form-control form-control-lg" type="numeric" name="celularUsuarioCita" id="celularUsuarioCita" value="{{ old('celularUsuarioCita') ?? $cita->celularUsuarioCita }}">
                                @error('talla')
                                    <i>{{ $message}}</i>
                                @enderror
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="horaUsuarioCita">Hora</label>
                                <input class="form-control form-control-lg" type="time" name="horaUsuarioCita" id="horaUsuarioCita" value="{{ old('horaUsuarioCita') ?? $cita->horaUsuarioCita }}">
                                @error('stock')
                                    <i>{{ $message}}</i>
                                @enderror
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type=submit
                                class="btn btn-warning btn-block btn-lg gradient-custom-4 text-body">Editar</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>