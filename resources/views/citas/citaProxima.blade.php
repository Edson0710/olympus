@extends('adminlte::page')

@section('title', 'Citas')
<link href="{{asset('img/olympus-icon.png')}}" rel="icon">

@section('content_header')
<h1>Citas</h1>

@stop

@section('content')
<table id="Mytable" class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Fecha</th>
            <th>Celular</th>
            <th>Hora</th>
            <th>Barbero</th>
            <th>Servicios</th>
            <th>Estado</th> 
            @if($fechas != 'anteriores')
                <th>Recordatorio</th>
            @else
                <th>Cal.</th>
                <th>Encuesta</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach($citas as $cita)
        <tr>
            <td>
                <a href="/cita/{{ $cita->id }}">
                    {{ $cita->nombreUsuarioCita }}
                </a>
            </td>
            <td>{{ $cita->emailUsuarioCita }}</td>
            <td>{{ $cita->fechaUsuarioCita }}</td>
            <td>{{ $cita->celularUsuarioCita }}</td>
            <td>{{ $cita->horaUsuarioCita }}</td>
            <td>{{ $cita->empleado->nombreEmpleado }}</td>
            <td>
                <ul class="pl-0 ml-0">
                    @foreach($cita->servicios as $servicio)
                        <li>{{ $servicio->nombreServicio }}</li>
                    @endforeach
                </ul>
            </td>
            <td>
                @if($cita->statusUsuarioCita == 0)
                    <span class="badge badge-warning">Pendiente</span>
                @elseif($cita->statusUsuarioCita == 1)
                    <span class="badge badge-success">Confirmada</span>
                @elseif($cita->statusUsuarioCita == 2)
                    <span class="badge badge-danger">Cancelada</span>
                @endif
            </td>
            @if($fechas != 'anteriores')
                <td>
                    @if ($cita->confirmacionUsuarioCita == 1)
                        <button class="btn btn-success"  disabled>Recordatorio Enviado</button>
                    @else
                        <form action="/cita/recordarCita/{{ $cita->id }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">Enviar recordatorio</button>
                        </form>
                    @endif
                </td>
            @else
                <td>@if($cita->calificacionUsuarioCita != null) {{$cita->calificacionUsuarioCita}} @else NA @endif</td>
                <td>
                    @if ($cita->encuestaUsuarioCita == 1)
                        <button class="btn btn-success"  disabled>Encuesta Enviada</button>
                    @else
                        <form action="/cita/encuesta/{{ $cita->id }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary" @if($cita->statusUsuarioCita == 2) disabled @endif>Enviar encuesta</button>
                        </form>
                    @endif
                </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" type="text/css" href="{{asset('css/cssAdmin/styles.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
@stop

@section('js')
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script>
    $(document).ready( function () {
        $('#Mytable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ]
                    }
                },
                {
                    extend: 'pdfHtml5',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ]
                    }
                },
            ],
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        } );
    } );
</script>
@stop
