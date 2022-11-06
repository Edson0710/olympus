<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cssAdmin/styles.css')}}">
    <title>Corte Edit</title>
</head>
<body>
    <div class="container" id="advanced-search-form">
        <h1>Editar Corte</h1>

        <form id="reservation-form" action="/corte/{{ $corte->id }}" method="POST">
            @csrf
            @method('PATCH')
                
            <div class="form-group">
                <label for="nombreCorte">Nombre del Corte</label>
                <input type="text" name="nombreCorte" id="nombreCorte" placeholder="Ingresa el nombre del corte" autocomplete="off"  value="{{ $corte->nombreCorte }}" required>
                @error('nombreCorte')
                    <i>{{ $message}}</i>
                @enderror
            </div>
            <div class="form-group">
                <label for="estiloCorte">Estilo del Corte</label>
                <input type="text" name="estiloCorte" id="estiloCorte" placeholder="Ingresa el estilo del corte" autocomplete="off" value="{{ $corte->estiloCorte }}" required>
                @error('estiloCorte')
                    <i>{{ $message}}</i>
                @enderror
            </div>
            <div class="form-group">
                <label for="descripcionCorte">Descripción</label>
                <input type="text" name="descripcionCorte" id="descripcionCorte" placeholder="Ingresa la descripción del corte" autocomplete="off" value="{{ $corte->descripcionCorte }}" required> 
                @error('descripcionCorte')
                    <i>{{ $message}}</i>
                @enderror 
            </div>
            
            <div class="clearfix"></div>
            <div class="row">
                <a class="btn btn-danger btn-lg btn-responsive" href="/corte">Cancelar</a>
                <button type="submit" class="btn btn-dark btn-lg btn-responsive">Actualizar</button>
            </div>
        </form>
    </div>
</body>
</html>