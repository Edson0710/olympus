<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Cita</title>
</head>
<body>
<section class="h-100 bg-white">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
            <a class="btn btn-dark" style="background-color:black" href="/cita">← Listado de Citas</a>
                <div class="separar">
                <div class="row g-0">
                    <div class="col-xl-6 d-none d-xl-block">
                    <img src="/img/mostrarSneakers.jpg"
                        alt="Sample photo" class="img-fluid"
                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                    </div>
                    <div class="col-xl-6">
                
                        <h3 class="mb-5 text-uppercase">Detalles de la Cita</h3>

                        <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                            <label class="form-label" for="form3Example1m">Nombre</label>
                            <input type="text" id="form3Example1m" class="form-control form-control-lg" value="{{ $cita->nombreUsuarioCita }}" disabled />
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                            <label class="form-label" for="form3Example1n">Email</label>
                            <input type="text" id="form3Example1n" class="form-control form-control-lg" value="{{ $cita->emailUsuarioCita }}" disabled />   
                            </div>
                        </div>
                        </div>

                        <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                            <label class="form-label" for="form3Example1m1">Fecha</label>
                            <input type="text" id="form3Example1m1" class="form-control form-control-lg" value="{{ $cita->fechaUsuarioCita }}" disabled />
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                            <label class="form-label" for="form3Example1n1">Celular</label>
                            <input type="text" id="form3Example1n1" class="form-control form-control-lg" value="{{ $cita->celularUsuarioCita }}" disabled />
                            </div>
                        </div>
                        </div>

                        <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example8">Hora</label>
                        <input type="text" id="form3Example8" class="form-control form-control-lg" value="{{ $cita->horaUsuarioCita }}" disabled />
                        </div>

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