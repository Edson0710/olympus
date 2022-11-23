@extends('adminlte::page')

@section('title', 'Olympus - Admin')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Bienvenido a la vista de Administrador.</p>
    <img style="text-align: center" src="{{asset('img/olympus.jpeg')}}" alt="Logo de Olympus" width="40%">

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop