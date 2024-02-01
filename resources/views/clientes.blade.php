@extends('layouts.landing')

@section('titulo', 'Clientes')

@section('contenido')
    <link rel="stylesheet" href="{{ asset('assets/css/clientes.css') }}">

    <div>
        <div class="text-center box-cliente">
            <h1>Clientes y Trabajos Realizados</h1>
            <p>
                Aquí mostramos algunos de nuestros clientes con quienes tuvimos el gusto de poder trabajar.
            </p>
        </div><br><br>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3">
                    <img src="{{asset('assets/img/escudounsa.gif')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="{{asset('assets/img/LogoCopaipa.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="{{asset('assets/img/logo_grupo_horizonte.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="{{asset('assets/img/gobernoSalta.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="{{asset('assets/img/estudioaban.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="{{asset('assets/img/ulapsi.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="{{asset('assets/img/pabike.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div><br><br>
@endsection