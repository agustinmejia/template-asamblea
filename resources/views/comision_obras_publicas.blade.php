@extends('layouts.master')

@section('seo')
    <title>Comisión de Obras Públicas - ALDB</title>
    <meta name="description" content="Miembros de la Asamblea Legislativa Departamental del Beni">
    <meta name="keywords" content="asamblea, legislativa, beni, trinidad, alcaldia">

    <meta property="og:url"           content="{{ url('') }}" />
    <meta property="og:type"          content="Blog" />
    <meta property="og:title"         content="ALDB" />
    <meta property="og:description"   content="Miembros de la Asamblea Legislativa Departamental del Beni" />
    <meta property="og:image"         content="{{ asset('assets/img/comisiones/obras_publicas.jpg') }}" />
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
                <li class="text-white">Comisión de Obras Públicas</li>
            </ol>
            <br>
            <h3 class="text-white">Comisión de Obras Públicas</h3>
            {{-- <br> --}}
            <p class="text-white">Las Comisiones son órganos permanentes de trabajo, coordinación, fiscalización, deliberación, legislación, investigación y consulta dentro la estructura orgánica de la Asamblea Legislativa Departamental.  Lo conforman los asambleístas, cada una puede tener un mínimo de tres (3) y máximo cinco (5), con derecho a voz y voto.</p>
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
                                <h3>Comisión de Obras Públicas</h3>
                                <p>Las comisiones tienen asignadas un ambiente de trabajo, donde sus miembros se reúnen para realizar tareas y actividades en los temas que les corresponde tratar, de acuerdo a su origen.</p>
                                <p>De manera general, las comisiones generan peticiones de informes, escritos u orales, minutas de comunicación, revisan proyectos de leyes y emiten informes para el pleno de la asamblea, participan en tareas de inspecciones, participan en reuniones de trabajo por iniciativa o a solicitud externa con representantes de organizaciones o funcionarios públicos, asisten a reuniones de coordinación,  mesas de trabajo, seminarios.  </p>
                                <p>A continuación, se citan los aspectos que les corresponden conocer:</p>
                                <ul>
                                    <li>Transporte y comunicaciones.</li>
                                    <li>Infraestructura caminera, fluvial, aeroportuaria y lacustre a nivel departamental.</li>
                                    <li>Proyectos de inversión pública vial de transporte de apoyo a la producción.</li>
                                    <li>Energía eléctrica en el ámbito de las competencias departamentales.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
                                <img src="{{ asset('assets/img/comisiones/obras_publicas.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
        
                    </div>
                </section>
                <!-- End Team Section -->
            </div>
        </section>
    </main>
@endsection