@extends('adminlte::page')

@section('title', 'Registrar Empleado')

@section('content_header')
    <h1>Registrar Empleado</h1>
@stop

@section('content')
<div class="container" id="advanced-search-form">
    <form action="/empleado" method="POST">
        @csrf
        <div class="row">
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
                <input type="text" name="telefonoEmpleado" class="form-control" placeholder="Número de teléfono" id="telefonoEmpleado" value="{{old('telefonoEmpleado')}}"  maxlength="10">
                @error('telefonoEmpleado')
                    <i>{{ $message}}</i>
                @enderror
            </div>
            <div class="form-group">
                <label for="curpEmpleado">CURP</label>
                <input type="text" name="curpEmpleado" class="form-control" placeholder="" id="curpEmpleado" value="{{old('curpEmpleado')}}" maxlength="18">
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
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cssAdmin/styles.css')}}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

    
