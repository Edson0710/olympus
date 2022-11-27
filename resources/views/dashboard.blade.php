@extends('adminlte::page')

@section('title', 'Olympus - Admin')
<link href="{{asset('img/olympus-icon.png')}}" rel="icon">

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Bienvenido a la vista de Administrador.</p>
        <img style="text-align: center" src="{{asset('img/barber-shop.jpg')}}" alt="Logo de Olympus" width="100%" >    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cssAdmin/styles.css')}}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop