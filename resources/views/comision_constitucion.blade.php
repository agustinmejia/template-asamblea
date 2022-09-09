@extends('layouts.master')

@section('seo')
    <title>Comisión de constitución - ALDB</title>
    <meta name="description" content="Miembros de la Asamblea Legislativa Departamental del Beni">
    <meta name="keywords" content="asamblea, legislativa, beni, trinidad, alcaldia">

    <meta property="og:url"           content="{{ url('') }}" />
    <meta property="og:type"          content="Blog" />
    <meta property="og:title"         content="ALDB" />
    <meta property="og:description"   content="Miembros de la Asamblea Legislativa Departamental del Beni" />
    <meta property="og:image"         content="{{ asset('assets/img/comisiones/costitucional.jpg') }}" />
@endsection

@section('css')
    <style>
        .breadcrumbs{
            min-height: 380px !important;
            background: url('{{ asset("assets/img/hero-bg.jpg") }}') center top -100px;
            background-size: cover;
            position: relative;
        }
        .dark-mask{
            width: 100%;
            height: 100%;
            z-index: 0px;
            background-color: rgba(0,0,0,0.6);
            /* backdrop-filter: blur(1px); */
            position: absolute
        }
    </style>
@endsection

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="dark-mask"></div>
        <div class="container" style="position: absolute; z-index: 10; padding: 15px">
            <ol>
                <li><a href="{{ url('') }}">Inicio</a></li>
                <li class="text-white">Comisión de constitución</li>
            </ol>
            <br>
            <h3 class="text-white">Comisión de constitución</h3>
            {{-- <br> --}}
            <p class="text-white">La comisiones permanentes, conformadas por un mínimo  de 3 y un máximo de 5 asambleistas.</p>
        </div>
    </section>
    <!-- End Breadcrumbs -->
    
    <main id="main">
        <section class="inner-page">
            <div class="container">
                <!-- ======= Team Section ======= -->
                <section id="about" class="about">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right">
                                <h3>Comisión de constitución</h3>
                                <br>
                                <ul>
                                    <li>Estructura institucional del GAD Beni.</li>
                                    <li>Desconcentración técnico – administrativa del Órgano Ejecutivo departamental.</li>
                                    <li>Transparencia y Lucha contra la Corrupción.</li>
                                    <li>Convenios y Acuerdos Interinstitucionales e intergubernativos.</li>
                                    <li>Seguridad Ciudadana y Comunitaria.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
                                <img src="{{ asset('assets/img/comisiones/costitucional.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
        
                    </div>
                </section>
                <!-- End Team Section -->
            </div>
        </section>
    </main>
@endsection