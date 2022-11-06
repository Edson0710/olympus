<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cssAdmin/styles.css')}}">
    <title>Registrar Empleado</title>
</head>
<body>

    <div class="container" id="advanced-search-form">
    <h2>Registrar Empleado</h2>

        <form action="/empleado" method="POST">

            @csrf

            <div class="form-group">
                <label for="nombreEmpleado">Nombre Completo</label>
                <input type="text" name="nombreEmpleado" class="form-control" placeholder="Nombre Completo" id="nombreEmpleado" value="{{old('nombreEmpleado')}}">
                @error('nombreEmpleado')
                    <i>{{ $message}}</i>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="rolEmpleado">Rol</label>
                <input type="text" name="rolEmpleado" class="form-control" placeholder="Rol del Empleado" id="rolEmpleado" value="{{old('rolEmpleado')}}">
                @error('rolEmpleado')
                    <i>{{ $message}}</i>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="generoEmpleado">Género</label>
                <select name="generoEmpleado" class="form-control" required>
                    <option selected disabled>Seleccione una opción</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Masculino">Masculino</option>
                    <option value="No binario">No binario</option>
                </select>
                @error('generoEmpleado')
                    <i>{{ $message}}</i>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="telefonoEmpleado">Teléfono</label>
                <input type="text" name="telefonoEmpleado" class="form-control" placeholder="Número de teléfono" id="telefonoEmpleado" value="{{old('telefonoEmpleado')}}">
                @error('telefonoEmpleado')
                    <i>{{ $message}}</i>
                @enderror
            </div>
            <div class="form-group">
                <label for="curpEmpleado">CURP</label>
                <input type="text" name="curpEmpleado" class="form-control" placeholder="" id="curpEmpleado" value="{{old('curpEmpleado')}}">
                @error('curpEmpleado')
                    <i>{{ $message}}</i>
                @enderror
            </div>
            <div class="form-group">
                <label for="fecha_NacEmpleado">Fecha de Nacimiento</label>
                <input type="date" name="fecha_NacEmpleado" class="form-control" placeholder="00/00/0000" id="fecha_NacEmpleado" value="{{old('fecha_NacEmpleado')}}">
                @error('fecha_NacEmpleado')
                    <i>{{ $message}}</i>
                @enderror
            </div>
            <!-- <div class="form-group">
                <label for="imagenEmpleado">Imagen de Empleado</label>
                <input type="text" name="imagenEmpleado"class="form-control" id="imagenEmpleado">
                @error('fecha_NacEmpleado')
                    <i>{{ $message}}</i>
                @enderror
            </div> -->
        
            <div class="clearfix"></div>
            <div class="row">
                <a class="btn btn-danger btn-lg btn-responsive" href="/empleado">Cancelar</a>
                <button type="submit" class="btn btn-dark btn-lg btn-responsive">Guardar</button>
            </div>
        </form>
    </div>
        
    </form>
    
</body>
</html>
