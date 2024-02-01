@extends('layouts.landing')

@section('titulo', 'Desarrollo Movil')
@section('contenido')
    <link rel="stylesheet" href="{{ asset('assets/css/pagemovil.css') }}">
    <div>
        <div class="boxmovil clearfix">
            <img src="{{asset('assets/img/appmovil.jpg')}}" alt="" class="col-md-6 float-md-end mb-3 ms-md-3 img-fluid" alt="...">
            <h1 class="text-center ">Desarrollo Movil</h1>
            <p class="h5">
                Cada vez más empresas, apuestan por incorporar proyectos de código abierto a sus modelos de negocio.

                Estos mismos pueden disponer de bases de datos propias o conexión a sistemas externos para una mejor calidad de servicios, al incorporar la portabilidad que ofrecen en dispositivos mobiles a su Red de servicios.
                
                Ud podrá optimizar los procesos, logrando asi bajar los costos y maximizar servicios y beneficios de su empresa.
                
                Este mismo puede ser desarrollado a través de App o bien a través de sitios web optimizados para mobiles.
                
                Los dispositivos móviles se convirtieron en objetos generalizados y de casi una necesidad cotidiana con el paso del tiempo.
                
                En Infrasoft desarrollamos aplicaciones con una interfaz de usuario personalizada desarrollada a medida de los requerimientos del cliente. Con estas tecnologías se puede hacer el hincapié en diferentes tipos de aplicaciones las cuales pueden incluir: la comunicación a través de GPRS, Bluetooth, aplicaciones Wap, transmisión de datos en XML con el servidor, bases de datos, etc
                
                Estas utilidades permitirían un mayor control en las diferentes aéreas: ventas, almacenamiento, administración, distribución, etc.
            </p>
        </div>
    </div>
@endsection