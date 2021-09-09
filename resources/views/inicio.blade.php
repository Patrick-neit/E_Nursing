<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> E_Nursing</title>
    <link rel="shortcut icon" href="img/odentis.png" type="image/x-icon">
    <link rel="stylesheet" href="/paginaodentis/css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <a href="#">Inicio</a>
            <a href="#">Acerca de</a>
            <a href="#">Portafolio</a>
            <!--<a href="#">Servicios</a>-->
            <a href="#">Contacto</a>
            <a href="{{ route('login') }}" class="text-sm text-red-700 underline">Login</a>
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
              <!--<a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>-->
        </nav>

        <section class="textos-header">
            <h1>Enfermeria E_Nursing</h1>
            <h2>¡¡¡Todos los servicios a domicilio que puedas imaginar, lo tenemos !!!</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Nuestro Servicios a domicilio</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="/paginaodentis/img/portada.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Los mejores servicios </h3>
                    <p>Nuestra enfermeria se especializa en todo tipo de problemas  ya que contamos con un equipo especializado
                        y comprometido con su trabajo
                    </p>
                    <h3><span>2</span>Nuestro consejo</h3>
                    <p>¿Sabías que puedes hacer el pago de nuestros servicios a traves de nuestra pasarela de pagos?</p>
                    <h3><span>3</span>Puedes seguirnos en todas nuestras redes!</h3>
                    <p>Para mas informacion puedes encontrarnos como: "E_Nursing" en FB e Instagram, te esperamos!</p>
                    <h3><span>4</span>Especialidades</h3>
                    <p>Contamos con Pediatras y odontologos especializados en el area para brindarte la mejor atencion</p>
                </div>
            </div>
        </section>
       <!-- <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">CATALOGO</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="/paginaodentis/img/imagcovid.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="/paginaodentis/img/icono1.png" alt="">
                            <p>Test Covid-19</p>
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
        </section>-->
        <section class="clientes contenedor">
            <h2 class="titulo">WHAT ABOUT OUR CLIENTS?</h2>
            <div class="cards">
                <div class="card">
                    <img src="/paginaodentis/img/face1.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Angela</h4>
                        <p>Excelentes servicios, lo recomiendo!</p>
                    </div>
                </div>
                <div class="card">
                    <img src="/paginaodentis/img/face2.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Jennifer</h4>
                        <p>Facil acceso y buenos metodos de pago!</p>
                    </div>
                </div>
            </div>
        </section>
        <!--<section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Nuestros servicios</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="/paginaodentis/img/img12.jpg" alt="">
                        <h3>Servicios y test prueba Covid-19</h3>
                        <p><center>
                              Todo tratamiento depende mucho del tiempo y <br> gravedad del caso </center></p>
                    </div>
                    <div class="servicio-ind">
                        <img src="/paginaodentis/img/img13.jpg" alt="">
                        <h3>Chequeos general del cuerpo</h3>
                        <p><center>materiales de ultima tecnología,<br> material
                             americano de muy buena calidad. </center></p>
                    </div>
                    <div class="servicio-ind">
                        <img src="/paginaodentis/img/img14.jpg" alt="">
                        <h3>Limpieza intestinal c / ultrasonido</h3>
                        <p><center>tratamiento rápido e indoloro </center></p>
                    </div>
                    <div class="servicio-ind">
                        <img src="/paginaodentis/img/img11.jpg" alt="">
                        <h3>Extraciones </h3>
                        <p>Medidor de presion y nivel de oxigeno en sangre<br> e impactados.</p>
                    </div>
                </div>
            </div>
        </section>-->
    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Telefonos</h4>
                <p>75601973 / 69112517</p>
            </div>
            <div class="content-foo">
                <h4>Localizacion</h4>
                <p>8vo anillo Cambodromo  </p>
            </div>
            <div class="content-foo">
                <h4>Direccion</h4>
                <p>C/ Alameda san Juan <br>
                    #.3005()
                    </p>
            </div>
        </div>

    </footer>
</body>

</html>
