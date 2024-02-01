@extends('layouts.landing')

@section('titulo', 'Tecnologias')

@section('contenido')
    <link rel="stylesheet" href="{{ asset('assets/css/pageTecnologia.css') }}">
    <br><br>
    <div class="box-tecnologia">
        <div class="container">
            <h1>Tecnologias</h1>
            <p>
                Nos especializamos en tecnologías libres y portables para el optimo rendimiento de nuestros proyectos, estos mismos pueden funcionar en diferentes sistemas operativos (Linux, Windows, Mac, etc), facilitando la integración de tecnologías ademas de poseer mas flexible la migración ( en caso de ser necesaria)

                A continuación detallaremos las Tecnologías que implementamos con sus respectivas características:
            </p>
        </div>
    </div><br><br>
    <div class="container box-lenguaje">
        <div class="row">
            <div class="col-md-4">
                <div class="text-center">
                    <h2>Java</h2>
                    <img src="{{asset('assets/img/java.png')}}" alt="" class="img-fluid" alt="..."> 
                
                </div>
                <p>
                    Java es un lenguaje de programación orientado a objetos, desarrollado por Sun Microsystems a principios de los años 90. El lenguaje en sí mismo toma mucha de su sintaxis de C y C++.
                </p>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <h2>Python</h2>
                    <img src="{{asset('assets/img/piton.png')}}" alt="" class="img-fluid" alt="..."> 
                </div>
                <p>
                    Python es un lenguaje de programación de alto nivel cuya filosofía hace hincapié en una sintaxis muy limpia y que favorezca un código legible.

                    Se trata de un lenguaje de programación multiparadigma ya que soporta orientación a objetos, programación imperativa y, en menor medida, programación funcional. Es un lenguaje interpretado, usa tipado dinámico, es fuertemente tipado y multiplataforma.
                </p>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <h2>PHP</h2>
                    <img src="{{asset('assets/img/php.png')}}" alt="" class="img-fluid" alt="..."> 
                </div>
                <p>
                    PHP es un lenguaje de programación interpretado, diseñado originalmente para la creación de páginas web dinámicas. Es usado principalmente para la interpretación del lado del servidor (server-side scripting) pero actualmente puede ser utilizado desde una interfaz de línea de comandos o en la creación de otros tipos de programas incluyendo aplicaciones con interfaz gráfica usando las bibliotecas Qt o GTK+
                </p>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <h2>NodeJS</h2>
                    <img src="{{asset('assets/img/nodejs.png')}}" alt="" class="img-fluid" alt="..."> 
                
                </div>
                <p>
                    Node.js es un entorno en tiempo de ejecución multiplataforma, de código abierto, para la capa del servidor (pero no limitándose a ello) basado en el lenguaje de programación JavaScript, asíncrono, con E/S de datos en una arquitectura orientada a eventos y basado en el motor V8 de Google. Fue creado con el enfoque de ser útil en la creación de programas de red altamente escalables, como por ejemplo, servidores web.4​ Fue creado por Ryan Dahl en 2009 y su evolución está apadrinada por la empresa Joyent, que además tiene contratado a Dahl en plantilla.5​ 6​Node.js es similar en su propósito a Twisted o Tornado de Python, Perl Object Environment de Perl, libevent o libev de C, EventMachine de Ruby, vibe.d de D y Java EE de Java existe Apache MINA, Netty, Akka, Vert.x, Grizzly o Xsocket. Al contrario que la mayoría del código JavaScript, no se ejecuta en un navegador, sino en el servidor. Node.js implementa algunas especificaciones de CommonJS.7​ Node.js incluye un entorno REPL para depuración interactiva.

                </p>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <h2>Spring</h2>
                    <img src="{{asset('assets/img/piton.png')}}" alt="" class="img-fluid" alt="..."> 
                </div>
                <p>
                    Spring es un framework para el desarrollo de aplicaciones y contenedor de inversión de control, de código abierto para la plataforma Java.2​La primera versión fue escrita por Rod Johnson, quien lo lanzó junto a la publicación de su libro Expert One-on-One J2EE Design and Development (Wrox Press, octubre 2002). El framework fue lanzado inicialmente bajo la licencia Apache 2.0 en junio de 2003. El primer gran lanzamiento fue la versión 1.0, que apareció en marzo de 2004 y fue seguida por otros hitos en septiembre de 2004 y marzo de 2005. La versión 1.2.6 de Spring Framework obtuvo reconocimientos Jolt Awards y Jax Innovation Awards en 2006.3​4​ Spring Framework 2.0 fue lanzada en 2006, la versión 2.5 en noviembre de 2007, Spring 3.0 en diciembre de 2009 y Spring 3.1 dos años más tarde.5​El inicio del desarrollo de la versión 4.0 fue anunciado en enero de 2013.6​ La versión actual es la 5.1.6.1​Si bien las características fundamentales de Spring Framework pueden ser usadas en cualquier aplicación desarrollada en Java, existen variadas extensiones para la construcción de aplicaciones web sobre la plataforma Java EE. A pesar de que no impone ningún modelo de programación en particular, este framework se ha vuelto popular en la comunidad al ser considerado una alternativa, sustituto, e incluso un complemento al modelo EJB (Enterprise JavaBean).
                </p>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <h2>Android</h2>
                    <img src="{{asset('assets/img/androide.png')}}" alt="" class="img-fluid" alt="..."> 
                </div>
                <p>
                    Android es un sistema operativo móvil desarrollado por Google, basado en núcleo Linux y otros software de código abierto. Fue diseñado para dispositivos móviles con pantalla táctil, como teléfonos inteligentes, tabletas, relojes inteligentes (Wear OS), automóviles (Android Auto) y televisores (Android TV). Inicialmente fue desarrollado por Android Inc., empresa que Google respaldó económicamente y que adquirió en 2005.​ Android fue presentado en 2007 junto con la fundación del Open Handset Alliance (un consorcio de compañías de hardware, software y telecomunicaciones) para avanzar en los estándares abiertos de los dispositivos móviles.​ El código fuente principal de Android se conoce como Android Open Source Project (AOSP), que se licencia principalmente bajo la Licencia Apache.5​ Android es el sistema operativo móvil más utilizado del mundo, con una cuota de mercado superior al 80 % al año 2017, muy por encima de IOS.6​7​8​9. Según los documentos secretos filtrados en 2013 y 2014, el sistema operativo es uno de los objetivos de las agencias de inteligencia internacionales.10​
                </p>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <h2>Angular</h2>
                    <img src="{{asset('assets/img/nodejs.png')}}" alt="" class="img-fluid" alt="..."> 
                
                </div>
                <p>
                    Angular (comúnmente llamado Angular 2+ o Angular 2) es un framework para aplicaciones web desarrollado en TypeScript, de código abierto, mantenido por Google, que se utiliza para crear y mantener aplicaciones web de una sola página. Su objetivo es aumentar las aplicaciones basadas en navegador con capacidad de Modelo Vista Controlador (MVC), en un esfuerzo para hacer que el desarrollo y las pruebas sean más fáciles. La biblioteca lee el HTML que contiene atributos de las etiquetas personalizadas adicionales, entonces obedece a las directivas de los atributos personalizados, y une las piezas de entrada o salida de la página a un modelo representado por las variables estándar de JavaScript. Angular se basa en clases tipo "Componentes", cuyas propiedades son las usadas para hacer el binding de los datos. En dichas clases tenemos propiedades (variables) y métodos (funciones a llamar). Angular es la evolución de AngularJS aunque incompatible con su predecesor.

                </p>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <h2>React</h2>
                    <img src="{{asset('assets/img/piton.png')}}" alt="" class="img-fluid" alt="..."> 
                </div>
                <p>
                    React es una biblioteca Javascript de código abierto diseñada para crear interfaces de usuario con el objetivo de facilitar el desarrollo de aplicaciones en una sola página. Es mantenido por Facebook y la comunidad de software libre. Han participado en el proyecto más de mil desarrolladores diferentes.
                </p>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <h2>Ionic</h2>
                    <img src="{{asset('assets/img/androide.png')}}" alt="" class="img-fluid" alt="..."> 
                </div>
                <p>
                    IONIC . Es una estructura tecnológica (Framework) de código abierto que se utiliza en el desarrollo de aplicaciones móviles híbridas. Combinando el código HTML5, CSS y JavaScript obtenemos aplicaciones con una interfaz amigable e intuitiva para el usuario. De esta forma desarrollando un único código es posible crear aplicaciones tanto en Android como en iOS.
                </p>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <h2>Laravel</h2>
                    <img src="{{asset('assets/img/nodejs.png')}}" alt="" class="img-fluid" alt="..."> 
                
                </div>
                <p>
                    Laravel es un framework de código abierto para desarrollar aplicaciones y servicios web con PHP 5 y PHP 7. Su filosofía es desarrollar código PHP de forma elegante y simple, evitando el "código espagueti". Fue creado en 2011 y tiene una gran influencia de frameworks como Ruby on Rails, Sinatra y ASP.NET MVC.​

                </p>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <h2>Hibernate</h2>
                    <img src="{{asset('assets/img/piton.png')}}" alt="" class="img-fluid" alt="..."> 
                </div>
                <p>
                    Hibernate es una herramienta de mapeo objeto-relacional (ORM) para la plataforma Java (y disponible también para .Net con el nombre de NHibernate) que facilita el mapeo de atributos entre una base de datos relacional tradicional y el modelo de objetos de una aplicación, mediante archivos declarativos (XML) o anotaciones en los beans de las entidades que permiten establecer estas relaciones. Hibernate es software libre, distribuido bajo los términos de la licencia GNU LGPL2​.
                </p>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <h2>CoderIgnate</h2>
                    <img src="{{asset('assets/img/androide.png')}}" alt="" class="img-fluid" alt="..."> 
                </div>
                <p>
                    CodeIgniter es un entorno de desarrollo abierto (licencia Open Source Apache/BSD-style) que permite crear webs dinámicas con PHP. Su principal objetivo es ayudar a que los desarrolladores puedan realizar proyectos mucho más rápido que creando toda la estructura desde cero. Esto se debe a que dispone de un conjunto bastante amplio de librerías útiles para realizar tareas comunmente necesarias, así como una interface simple y una estructura lógica sencillapara acceder a esas librerías. CodeIgniter le permite enfocarse en la parte creativa de su proyecto, minimizando la cantidad de código necesaria para una tarea dada.
                </p>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <h2>JavaScript</h2>
                    <img src="{{asset('assets/img/js.png')}}" alt="" class="img-fluid" alt="..."> 
                
                </div>
                <p>
                    JavaScript. Se utiliza principalmente en su forma del lado del cliente (client-side), implementado como parte de un navegador web permitiendo mejoras en la interfaz de usuario y páginas web dinámicas, aunque existe una forma de JavaScript del lado del servidor (Server-side JavaScript o SSJS)

                </p>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <h2>MySQL</h2>
                    <img src="{{asset('assets/img/mysql.png')}}" alt="" class="img-fluid" alt="..."> 
                </div>
                <p>
                    MySQL es muy utilizado en aplicaciones web asi como tambien de escritorio, en plataformas (Linux/Windows-Apache-MySQL-PHP/Perl/Python/Java), y por herramientas de seguimiento de errores como Bugzilla. Su popularidad como aplicación web está muy ligada a PHP
                </p>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <h2>PostgreSQL</h2>
                    <img src="{{asset('assets/img/POSTGRE.png')}}" alt="" class="img-fluid" alt="..."> 
                </div>
                <p>
                    PostgreSQL es un sistema de gestión de base de datos relacional orientada a objetos y libre, publicado bajo la licencia BSD. PostgreSQL permite que mientras un proceso escribe en una tabla, otros accedan a la misma tabla sin necesidad de bloqueos. Cada usuario obtiene una visión consistente de lo último a lo que se le hizo commit.
                </p>
            </div>
        </div>  
    </div><br><br>
@endsection