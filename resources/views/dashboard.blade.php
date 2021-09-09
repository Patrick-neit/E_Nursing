@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<head>
    <link rel="stylesheet" href="/paginaodentis/css/estilos2.css">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <title> E_Nursing</title>
        </h2>
    </x-slot>
</head>
@stop

@section('content')

<section class="about-services">
    <div class="contenedor">
        <h2 class="titulo">Nuestros servicios a domicilio</h2>
        <div class="servicio-cont">
            <div class="servicio-ind">
                <img src="/paginaodentis/img/imagcovid.jpg" alt="">
                <h3>Servicios y test prueba Covid-19</h3>
                <p><center>Incluye: Prueba de Isopado <br> y resultados en 15 minutos </center></p>
            </div>

            <div class="servicio-ind">
                <img src="/paginaodentis/img/imgatenjpg.jpg" alt="">
                <h3>Chequeo general del cuerpo</h3>
                <p><center>Incluye atencion y chequeos,<br> Pueden ser generales o especificos. </center></p>
            </div>
            <div class="servicio-ind">
                <img src="/paginaodentis/img/imginyec.jpg" alt="">
                <h3>Inyectables </h3>
                <p><center>Para cualquier tipo de malestar, te inyectamos a domicilio! </center></p>
            </div>
            <div class="servicio-ind">
                <img src="/paginaodentis/img/img1.jpg" alt="">
                <h3>Nuestro trabajo</h3>
                <p>Enterate mas de nuestros servicios <br> en nuestras redes sociales.</p>
            </div>
        </div>
    </div>
</section>
@stop

