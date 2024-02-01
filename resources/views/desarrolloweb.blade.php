@extends('layouts.landing')

@section('titulo', 'Desarrollo Web')
@section('contenido')
<link rel="stylesheet" href="{{ asset('assets/css/desarrolloWeb.css') }}">
    <div>
        <div class="boxWeb clearfix">
            <img src="{{asset('assets/img/desarrolloWeb.jpg')}}" alt="" class="col-md-6 float-md-end mb-3 ms-md-3 img-fluid" alt="...">
            <h1 class="text-center ">Desarrollo Web</h1>
            <p>
                En la ingeniería de software se denomina aplicación web a aquellas herramientas que los usuarios pueden utilizar 
                accediendo a un servidor web a través de Internet o de una intranet mediante un navegador. 
                Las aplicaciones web son populares debido a lo práctico del navegador web como cliente ligero, a la independencia del sistema operativo, 
                así como a la facilidad para actualizar y mantener aplicaciones web sin distribuir e instalar software a miles de usuarios potenciales.
            </p>
        </div>
        <div class="boxWeb2">
            <p class="container">
                La mejor opción para su empresa es tener una buena presencia en la web, ya sea un sitio web dinámico adaptable a todos sus productos y servicios que Ud. Vende.
                Un sitio que sea ágil, fácil de navegar y actualizar. Que pueda tenerlo en los tiempos pactados de realización a los mejores costos En Infrasoft, brindamos 
                los servicios más adecuados para su empresa, Ud. podrá disponer de un sitio web o un sistema que estaría subida a la web. Nosotros proporcionaremos todos 
                aquellos servicios requeridos para que su sitio o su sistema sea optimo y de fácil uso para el usuario o los administradores a designar.
              </p>
        </div>
        <div class="boxServicios">
            <p class="container h1">
                Existen muchas categorías para sitios web dinámicos entre ellos tenemos
            </p><br>
            <div class="row">
                  <div class="col-md-4">
                    <h3 class="text-center">Sitio de Empresa</h3>
                    <p>
                      Usado para promocionar una empresa o servicio.
                    </p><br><br><br><br>
                    <div class="text-center">
                        <img src="{{asset('assets/img/sitioEmpresarial.jpg')}}" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <h3 class="text-center">Sitio de Comercio Electrónico</h3>
                    <p>
                      Para comprar bienes, como Amazon.com, mercadolibre.com.ar
                    </p><br><br><br>
                    <div class="text-center">
                        <img src="{{asset('assets/img/comercioElectronico.jpg')}}" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <h3 class="text-center">Sitio de Comunidad Virtual</h3>
                    <p>
                      Un sitio o portal social donde las personas con intereses similares se comunican unos con otros, normalmente por chat o foros o simples mensajes.
                      Por ejemplo: MySpace, Facebook, Hi5, Orkut, Habbo, Multiply, Quepasa.
                    </p>
                    <div class="text-center">
                        <img src="{{asset('assets/img/comunidadVirtual.jpg')}}" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <h3 class="text-center">Sitio de Base de Datos</h3>
                    <p>
                      Un sitio donde el uso principal es la búsqueda y muestra de un contenido específico de la base de datos, como por ejemplo: Internet Movie Database.
                    </p><br>
                    <div class="text-center">
                        <img src="{{asset('assets/img/basededatos.jpg')}}" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <h3 class="text-center">Sitio de Descargas</h3>
                    <p>
                      Estrictamente usado para descargar contenido electrónico, como software, juegos o fondos de escritorio: Download, Tucows, Softonic, Baulsoft.
                    </p><br>
                    <div class="text-center">
                        <img src="{{asset('assets/img/sitiodescargas.jpg')}}" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <h3 class="text-center">Sitio Personal</h3>
                    <p>
                        Mantenido por una persona o un pequeño grupo(como por ejemplo familia) que contiene información o cualquier contenido que la persona quiere incluir: Facebook, Fotolog.
                    </p>
                    <div class="text-center">
                        <img src="{{asset('assets/img/sitioPersonal.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="boxSistemaWeb">
            <div class="row">
                <div class="col-md-6 text-center">
                  <h3>Diseño de Sistemas en la Web</h3>
                  <p>
                    Estos sistemas por lo general son de tipo cliente-servidor, brindan grandes beneficios para sucursales independientes, 
                    es un sistema útil cuando la distancia resulta un inconveniente. Los usuarios, clientes y administradores no tienen 
                    por que coexistir en el mismo lugar esto permite un mayor rango de cobertura que provee internet.
                  </p><br>
                  
                </div>
                <div class="col-md-6 text-center">
                  <h3>Posicionamiento en Buscadores</h3>
                  <p>El posicionamiento en buscadores o posicionamiento web es el proceso de mejorar la visibilidad de un sitio web en 
                    los diferentes buscadores, como Google, Yahoo! o Bing de manera orgánica, es decir sin pagarle dinero al buscador 
                    para tener acceso a una posición destacada en los resultados.
                  </p><br>
                  <img src="seo.png" alt="" class="img-fluid">
                </div>
              </div>
        </div>
    </div>
@endsection