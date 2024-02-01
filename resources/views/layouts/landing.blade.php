<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}">
    <title>
        @yield('titulo')
    </title>
</head>
<body>
      <header>
        <div>
          <nav class="navbar navbar-expand-lg bg-body-tertiary navbar bg-primary" data-bs-theme="dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="landing.blade.php">INFRASOFT</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        INSTITUCIONAL
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/quienesSomos">QUIENES SOMOS</a></li>
                      <li><a class="dropdown-item" href="/politicaSeguridad">POLITICA DE PRIVACIDAD</a></li>
                      <li><a class="dropdown-item" href="#">PREGUNTAS FRECUENTES</a></li>
                      <li><a class="dropdown-item" href="/comoTrabajamos">COMO TRABAJAMOS</a></li>
                      <li><a class="dropdown-item" href="/pageTecnologia">TECNOLOGIAS </a></li>
                      <li><a class="dropdown-item" href="clientes">CLIENTES</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        SERVICIOS
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">DESARROLLO DE SOFTWARE</a></li>
                      <li><a class="dropdown-item" href="/desarrolloweb">DESARROLLO WEB</a></li>
                      <li><a class="dropdown-item" href="/desarrollomovil">DESARROLLO MOVIL</a></li>
                      <li><a class="dropdown-item" href="#">SEGURIDAD INFORMÁTICA</a></li>
                      <li><a class="dropdown-item" href="#">SERVICIO TÉCNICO</a></li>
                      <li><a class="dropdown-item" href="#">MARKETING DIGITAL</a></li>
                      <li><a class="dropdown-item" href="#">CAMARA SE SEGURIDAD</a></li>
                      <li><a class="dropdown-item" href="#">PLATAFORMA EDUCATIVA</a></li>
                      <li><a class="dropdown-item" href="pagered">REDES Y SERVIDORES</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        CONTACTO
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">QUIENES SOMOS</a></li>
                      <li><a class="dropdown-item" href="#">POLITICA DE PRIVACIDAD</a></li>
                      <li><a class="dropdown-item" href="#">PREGUNTAS FRECUENTES</a></li>
                      <li><a class="dropdown-item" href="#">COMO TRABAJAMOS</a></li>
                      <li><a class="dropdown-item" href="#">TECNOLOGIAS </a></li>
                      <li><a class="dropdown-item" href="#">CLIENTES</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <div class="contenedor">
        <section>
            <article class="">
              <img src="{{asset('assets/img/fondoHome2.jpg')}}" alt="" class="" alt="..." width="100%" height="20%"> 
              <p class="texto_centrado">INFRASOFT Empresa dedicada al Desarrollo de Sistemas para emprededores, pymes y empresas que quieran mejorar su negocio.</p>
            </article>
        </section>
    </div> <br>
     
    @yield('contenido')
    <div class="boxFooter">
      <footer>
          <div class="row text-center">
            <div class="col-md-4">
              <h3 class="h5 container">Información para el Cliente</h3>
                <a href='https://www.infrasoft.com.ar/index.php/sitios/productos/hosting/' > Alojamiento Web</a><br>
                <a href='https://www.infrasoft.com.ar/index.php/sitios/productos/plataformas-educativas/' > Plataformas Educativas</a><br>
                <a href='https://www.infrasoft.com.ar/index.php/sitios/productos/productos/' > Productos</a> 
                <a href='https://www.infrasoft.com.ar/index.php/sitios/productos/streaming/' > Radio por internet</a>
                <a href='https://www.infrasoft.com.ar/index.php/sitios/productos/sist-bancario/' > Sistema Bancario</a><br>
                <a href='https://www.infrasoft.com.ar/index.php/sitios/productos/sist-stock/' > Sistema de Stock</a><br>
                <a href='https://www.infrasoft.com.ar/index.php/sitios/productos/sistema-de-escritorio/' > Sistemas de Escritorio</a><br>
                <a href='https://www.infrasoft.com.ar/index.php/sitios/productos/sistemas-web/' > Sistemas Web</a>	
            </div>
            <div class="col-md-4">
              <h3 class="h5 container">Siguenos en</h3>
              <a href="https://www.facebook.com/infrasofts/" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
              </svg></a>
              <a href="https://twitter.com/infra_soft"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15"/>
              </svg></a>
              <a href="https://api.whatsapp.com/send?phone=5493872204925&text=-Consultas-'"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
              </svg></a>
            </div>
            <div class="col-md-4">
              <h3 class="h5">Comunicate con Nosotros</h3>
              <p>
                (+54) 387 2204925
              </p>
            </div>
          </div>
      </footer>
    </div>
   <div class="boxPie">
      <p class="text-center">
        Copyright © 2014-2024 INFRASOFT
      </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
