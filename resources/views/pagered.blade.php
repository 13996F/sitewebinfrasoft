@extends('layouts.landing')

@section('titulo', 'Redes y Servidores')
@section('contenido')
    <link rel="stylesheet" href="{{ asset('assets/css/pageredes.css') }}">
    <div class="container">
        <div>
            <h1>REDES Y SERVIDORES</h1>
            <p>
                Somos una empresa especializada en la instalación de redes informáticas, las cuales pueden ser: redes de fibra óptica, redes Wifi o de cable estructurado UTP (CAT 5). Trabajamos en la instalación y configuración de la red, tanto en la conexión de dispositivos físicos como en las aplicaciones de software.
            </p>
            <p>
                Trabajamos para ofrecer en cada proyecto las soluciones que mejor se ajusten a las necesidades de nuestros clientes haciendo foco en:
            </p>
            <div class="alert alert-primary" role="alert">
                Tecnología, capacidad de crecimiento y presupuesto
              </div>
              <div class="alert alert-primary" role="alert">
                Ingeniería, diseño, desarrollo e implementación
              </div>
              <div class="alert alert-primary" role="alert">
                Provisión de equipamiento, insumos y repuestos
              </div>
              <div class="alert alert-primary" role="alert">
                Mantenimiento y capacitación
            </div>
        </div>
        <div>
            <h2 class="h4">SERVICIOS OFRECIDOS</h2>
            <div class="container overflow-hidden">
                <div class="row gy-5">
                  <div class="col-6">
                    <div class="p-3 border bg-light">
                       <p>Migración de sistemas: Cambiamos tu sistema operativo o instalamos una versión adaptada a los requerimientos de tu negocio.</p><br>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3 border bg-light">
                        <p>Virtualizacón de servidores: Virtualizamos tus servidores físicos y lo convertimos en una máquina virtual para una mayor optimización de los recursos informáticos.</p>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3 border bg-light">
                        <p>Sustitución de equipo: Sustituimos tus equipos informáticos por nuevos ordenadores con mayor velocidad y performance.</p>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3 border bg-light">
                        <p>Instalaciones Wifi: Hacemos una instalación de red inalámbrica para que puedas conectarte a Internet en todo el recinto de tu empresa.</p>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3 border bg-light">
                        <p>Cableado estructurado: Diseñamos e implantamos toda el tendido e infraestructura de cables para una distribución rápida e inteligente.</p><br>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3 border bg-light">
                        <p>Certificación de redes:Aplicamos técnicas para analizar el rendimiento de tus sistemas y damos garantía de que cumplen los estándares adecuados.</p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    <div class="boxService">
        <h2 class="h4 container">SERVICIOS VINCULADOS</h2>
        <div class="alert alert-light container">
            <h3>Servicios de Conectividad e Infraestructura de Red</h3>
            <p>
                Este servicio comprende la planificación, diseño e instalación de soluciones de redes con cableado estructurado, fibra optica, o bien conexiones inalámbricas (wiffi, satelital, etc).

                Se incluyen también las tareas de instalación y configuración de elementos activos (hubs, switchs, routers, etc.) y soluciones móviles e inalámbricas (wiffi,bluetooth, etc.).

                En todos los casos se realizara un relevamiento de las necesidades del cliente para realizar el diseño que más se adecue a las necesidades y requerimientos del cliente.

                Las soluciones planteadas resuelven en forma integral la conectividad del cliente, ya sea en un solo espacio físico o con oficinas distantes a miles de kilómetros.
            </p>
        </div>
        <div class="alert alert-light container">
            <h2>Servicios de Infraestructura Tecnológica</h2>
            <p>
                Este servicio incluye la planificación, diseño e instalación de la infraestructura tecnológica que se montará sobre una red existente (servidores, impresoras, terminales, etc.).

                Esta es una solución se dejará completamente operativa la infraestructura tecnológica del cliente y se garantizará la óptima utilización de los recursos disponibles.
            </p>
        </div>
        <div class="alert alert-light container">
            <h3>Certificación de Red</h3>
            <p>
                Certificamos redes existentes o instaladas por nuestro personal.

                El resultado de este trabajo será un informe con el detalle por boca señalando si cumple con la norma vigente.

                Adicionalmente se podrá solicitar un análisis de la infraestructura de red y tecnológica, donde además de la certificación propiamente dicha, haremos una serie de recomendaciones para garantizar (en caso de que sea posible) un nivel superior de confiabilidad, seguridad y optimización de recursos.
            </p>
        </div>
    </div>
@endsection