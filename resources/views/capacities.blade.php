@extends('layouts.master')

@section('seo')
    <title>Asambleistas - ALDB</title>
    <meta name="description" content="Miembros de la Asamblea Legislativa Departamental del Beni">
    <meta name="keywords" content="asamblea, legislativa, beni, trinidad, alcaldia">

    <meta property="og:url"           content="{{ url('') }}" />
    <meta property="og:type"          content="Blog" />
    <meta property="og:title"         content="ALDB" />
    <meta property="og:description"   content="Miembros de la Asamblea Legislativa Departamental del Beni" />
    <meta property="og:image"         content="{{ asset('assets/img/hero-bg.jpg') }}" />
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
                <li class="text-white">Facultades</li>
            </ol>
            <br>
            <h3 class="text-white">Facultades de la Asamblea Legislativa Departamental del Beni</h3>
            {{-- <br> --}}
            <p class="text-white">La Asamblea Legislativa Departamental, es el órgano representativo con facultad deliberativa, legislativa, fiscalizadora, de control y censura del Gobierno Departamental Autónomo del Beni, conforme a lo establecido por la Constitución Política del Estado y por el Estatuto del Departamento Autónomo del Beni. ASAMBLEA LEGISLATIVA DEPARTAMENTAL DEL BENI.</p>
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
                            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                                <h3>Facultades de la Asamblea Legislativa Departamental</h3>
                                <p class="fst-italic">La facultad legislativa es la potestad para emitir leyes departamentales en el marco de sus competencias exclusivas, válidas en toda su jurisdicción y para todos los ciudadanos bolivianos residentes en el departamento.</p>
                                <br>
                                <p class="fst-italic">La facultad deliberativa es la capacidad de debatir y tomar decisiones sobre todos los asuntos de interés departamental de forma consensuada por los miembros del plenario de la Asamblea Departamental.</p>
                                <br>
                                <p class="fst-italic">La facultad fiscalizadora es la potestad que tiene de fiscalizar los actos del Órgano Ejecutivo, instituciones y empresas públicas, privadas y/o mixtas, nacionales o extranjeras en la ejecución de políticas, planes, proyectos, programas y el manejo de los recursos departamentales.</p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
                                <img src="{{ asset('images/about.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
        
                    </div>
                </section>
                <!-- End Team Section -->
            </div>
        </section>
    </main>
@endsection