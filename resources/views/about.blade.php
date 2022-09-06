@extends('layouts.master')

@section('seo')
    <title>Acerca de - ALDB</title>
    <meta name="description" content="Miembros de la Asamblea Legislativa Departamental del Beni">
    <meta name="keywords" content="asamblea, legislativa, beni, trinidad, alcaldia">

    <meta property="og:url"           content="{{ url('about') }}" />
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
                <li class="text-white">Acerca de</li>
            </ol>
            <br>
            <h3 class="text-white">Acerca de la Asamblea Legislativa Departamental del Beni</h3>
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
                                <h3>Misión</h3>
                                <p class="fst-italic">Ser el órgano legislativo del Gobierno Autónomo Departamental del Beni, representativo, pluralista, inclusivo y eficiente en el cumplimiento de sus facultades y atribuciones, reconocido como un actor político estratégico para coadyuvar al logro de las grandes aspiraciones de desarrollo  del departamento.</p>
                                <br>
                                <h3>Visión</h3>
                                <p class="fst-italic">Ejercer sus facultades, respetando los principios democráticos, a través de la aprobación de leyes departamentales que impulsen el desarrollo económico y social incluyente, la deliberación con pluralidad política responsable, y la fiscalización efectiva para transparentar el manejo de la administración pública.</p>
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