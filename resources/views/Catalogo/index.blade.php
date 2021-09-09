@extends('adminlte::page')
@section('title', 'Ver Catalogo')



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

<section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">CATALOGO</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="/paginaodentis/img/imagcovid.jpg" alt="">
                        <div class="hover-galeria">
                            <a href="{{route('servicio.index')}}"> <!--Asi asigno routa o direccion a mi imagen-->
                                <img src="/paginaodentis/img/icono1.png" alt="">
                                <p>Test Covid-19</p>
                            </a>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="/paginaodentis/img/imgchequeo.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="/paginaodentis/img/icono1.png" alt="">
                            <p>Chequeo General</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="/paginaodentis/img/imgasisten.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="/paginaodentis/img/icono1.png" alt="">
                            <p>Funcion asistencial</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="/paginaodentis/img/imgsangre.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="/paginaodentis/img/icono1.png" alt="">
                            <p>Analisis de sangre</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="/paginaodentis/img/imginyec.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="/paginaodentis/img/icono1.png" alt="">
                            <p>Inyectables</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="/paginaodentis/img/imgatenjpg.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="/paginaodentis/img/icono1.png" alt="">
                            <p>Atencion y cuidados</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="/paginaodentis/img/imgmedidas.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="/paginaodentis/img/icono1.png" alt="">
                            <p>Medidas Preventivas</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="/paginaodentis/img/img7.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="/paginaodentis/img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@stop
