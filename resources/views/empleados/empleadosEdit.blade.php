@extends('adminlte::page')

@section('title', 'Editar Empleado')

@section('content_header')
    <h1>Editar Empleado</h1>
@stop

@section('content')
<div class="container" id="advanced-search-form">
    <h2>Editar Empleado</h2>

        <form action="/empleado/{{ $empleado->id }}" method="POST">

            @csrf
            @method('PATCH')
            <div class="row">

                <div class="form-group">
                    <label for="nombreEmpleado">Nombre Completo</label>
                    <input type="text" name="nombreEmpleado" class="form-control" placeholder="Nombre Completo" id="nombreEmpleado" value="{{ old('nombreEmpleado') ?? $empleado->nombreEmpleado }}">
                    @error('nombreEmpleado')
                        <i>{{ $message}}</i>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="rolEmpleado">Rol</label>
                    <input type="text" name="rolEmpleado" class="form-control" placeholder="Rol del Empleado" id="rolEmpleado" value="{{ old('rolEmpleado') ?? $empleado->rolEmpleado }}">
                    @error('rolEmpleado')
                        <i>{{ $message}}</i>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="generoEmpleado">Género</label>
                    <select name="generoEmpleado" class="form-control" required>
                        <option selected disabled>Seleccione una opción</option>
                        <option selected disabled>Seleccione una opción</option>
                        <option value="Femenino" {{ $empleado->generoEmpleado == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                        <option value="Masculino" {{ $empleado->generoEmpleado == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                        <option value="No binario" {{ $empleado->generoEmpleado == 'No binario' ? 'selected' : '' }}>No binario</option>
                    </select>
                    @error('generoEmpleado')
                        <i>{{ $message}}</i>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="telefonoEmpleado">Teléfono</label>
                    <input type="text" name="telefonoEmpleado" class="form-control" placeholder="Número de teléfono" id="telefonoEmpleado" value="{{ old('telefonoEmpleado') ?? $empleado->telefonoEmpleado }}"  maxlength="10">
                    @error('telefonoEmpleado')
                        <i>{{ $message}}</i>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="curpEmpleado">CURP</label>
                    <input type="text" name="curpEmpleado" class="form-control" placeholder="" id="curpEmpleado" value="{{ old('curpEmpleado') ?? $empleado->curpEmpleado }}" maxlength="18">
                    @error('curpEmpleado')
                        <i>{{ $message}}</i>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="fecha_NacEmpleado">Fecha de Nacimiento</label>
                    <input type="date" name="fecha_NacEmpleado" class="form-control" placeholder="00/00/0000" id="fecha_NacEmpleado" value="{{ old('fecha_NacEmpleado') ?? $empleado->fecha_NacEmpleado }}">
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
            </div>
            
            <div class="clearfix"></div>
            <div class="row">
                <a class="btn btn-danger btn-lg btn-responsive" href="/empleado">Cancelar</a>
                <button type="submit" class="btn btn-dark btn-lg btn-responsive">Actualizar</button>
            </div>
        </form>
    </div>
        
    </form>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cssAdmin/styles.css')}}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

