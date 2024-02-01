@extends('layouts.landing')

@section('titulo', 'Home')
@section('contenido')
<link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
<br><br>
<div class="box">
    <div class="container">
        <div class="row box-One text-center">
            <div class="box-servicios col-md-3">
                <a href="https://www.infrasoft.com.ar/index.php/sitios/servicios/desarrollo-de-software/">Desarrollo de Sistema</a>
                <p>
                    Sistemas desarrollados con las últimas tecnologías, mediantes procesos estandarizados y correctamente planificados.
                </p>
                <img src="{{asset('assets/img/desarrolloSistema.jpg')}}" alt="" class="img-fluid">
            </div>
            <div class="box-servicios col-md-3">
                <a href="https://www.infrasoft.com.ar/index.php/sitios/productos/sistemas-web/">Diseño Web</a>
                <p>
                    Diseños adaptados a los diferentes dispositivos que existen en la actualidad (pc, notebook, ipad, tablets, ipod, iphone, celulares).
                </p>
                <img src="{{asset('assets/img/diseñoWeb.jpg')}}" alt="" class="img-fluid">
            </div>
            <div class="box-servicios col-md-3">
                <a href="https://www.infrasoft.com.ar/index.php/sitios/servicios/desarrollo-mobile/">Desarrollo de App Movil</a>
                <p>
                    Desarrollo, analisis de factibilidad, analisis, diseño, etc
                </p><br><br>
                <img src="{{asset('assets/img/appMobil.jpg')}}" alt="" class="img-fluid">
            </div>
            <div class="box-servicios col-md-3">
                <a href="https://www.infrasoft.com.ar/index.php/sitios/servicios/servicio-tecnico/">Servicio Técnico</a>
                <p>
                    Servicios de mantenimiento y actualizacion de sistemas informaticos.
                </p><br>
                <img src="{{asset('assets/img/servicioTecnico.jpg')}}" alt="" class="img-fluid">
            </div>
        </div>
    </div><br>
    <div class="container">
        <div class="row box-One text-center">
            <div class="box-servicios  col-md-3">
                <a href="https://www.infrasoft.com.ar/index.php/sitios/servicios/comercio-electronico/">Marketing Digital</a>
                <p>
                    El desarrollo de múltiples técnicas como ser: Redes Sociales, Posicionamiento en buscadores, diseño grafico, merchandising, etc
                </p>
                <img src="{{asset('assets/img/marketing.jpg')}}" alt="" class="img-fluid">
            </div>
            <div class="box-servicios  col-md-3">
                <a href="https://www.infrasoft.com.ar/index.php/sitios/servicios/instalacion-de-camaras-ip/">Camara y Alarma de Seguridad</a>
                <p>
                    Brindando una amplia posibilidad acordes a sus necesidades.
                </p><br><br>
                <img src="{{asset('assets/img/camaras.jpg')}}" alt="" class="img-fluid">
            </div>
            <div class="box-servicios  col-md-3">
                <a href="https://www.infrasoft.com.ar/index.php/sitios/productos/plataformas-educativas/">Plataforma Educativa</a>
                <p>
                    Alquiler, alojamiento y asesoramiento de cursos, eventos
                </p><br><br>
                <img src="{{asset('assets/img/plataformaEducativa.jpg')}}" alt="" class="img-fluid">
            </div>
            <div class="box-servicios  text-center col-md-3">
                <a href="https://www.infrasoft.com.ar/index.php/sitios/servicios/redes/">Redes y Servidores</a>
                <p>
                    Instalacion redes cableadas e inalambricas - Backup de datos - Testing - VPN
                </p><br>
                <img src="{{asset('assets/img/redesServiodres.jpg')}}" alt="" class="img-fluid">
            </div>
        </div>
    </div><br>
</div><br>
@endsection