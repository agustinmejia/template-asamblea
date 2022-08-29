@extends('layouts.master')

@section('seo')
    <title>Comisión de Hacienda y Presupuesto - ALDB</title>
    <meta name="description" content="Miembros de la Asamblea Legislativa Departamental del Beni">
    <meta name="keywords" content="asamblea, legislativa, beni, trinidad, alcaldia">

    <meta property="og:url"           content="{{ url('') }}" />
    <meta property="og:type"          content="Blog" />
    <meta property="og:title"         content="ALDB" />
    <meta property="og:description"   content="Miembros de la Asamblea Legislativa Departamental del Beni" />
    <meta property="og:image"         content="{{ asset('assets/img/comisiones/hacienda.jpg') }}" />
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
                <li class="text-white">Comisión de Hacienda y Presupuesto</li>
            </ol>
            <br>
            <h3 class="text-white">Comisión de Hacienda y Presupuesto</h3>
            {{-- <br> --}}
            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
                            {{-- <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p class="fst-italic">ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                                <br>
                                <h3>sed do eiusmod tempor incididunt ut</h3>
                                <p class="fst-italic">ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                            </div> --}}
                            <div class="col-lg-12 order-1 order-lg-2" data-aos="fade-left">
                                <img src="{{ asset('assets/img/comisiones/hacienda.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
        
                    </div>
                </section>
                <!-- End Team Section -->
            </div>
        </section>
    </main>
@endsection