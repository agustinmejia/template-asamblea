@extends('layouts.master')

@section('seo')
    <title>{{ $group->title }} - ALDB</title>
    <meta name="description" content="Miembros de la {{ $group->title }} de la Asamblea Legislativa Departamental del Beni">
    <meta name="keywords" content="asamblea, legislativa, beni, trinidad, alcaldia">

    <meta property="og:url"           content="{{ url('') }}" />
    <meta property="og:type"          content="Blog" />
    <meta property="og:title"         content="{{ $group->title }} - ALDB" />
    <meta property="og:description"   content="Miembros de la {{ $group->title }} de la Asamblea Legislativa Departamental del Beni" />
    <meta property="og:image"         content="{{ asset('assets/img/hero-bg.jpg') }}" />
@endsection

@section('css')
    <style>
        .breadcrumbs{
            min-height: 250px !important;
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
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="dark-mask"></div>
            <div class="container" style="position: absolute; z-index: 10; padding: 15px">
                <ol>
                    <li><a href="{{ url('') }}">Inicio</a></li>
                    <li class="text-white">{{ $group->title }}</li>
                </ol>
                <br>
                <h3 class="text-white">{{ $group->title }} de la Asamblea Legislativa Departamental del Beni</h3>
                <br>
            </div>
        </section><!-- End Breadcrumbs -->
        <section class="inner-page">
            <div class="container">
                <!-- ======= Portfolio Section ======= -->
                <section id="portfolio" class="portfolio">
                    <div class="container">

                        <div class="section-title">
                            <span>{{ $group->title }}</span>
                            <h2>{{ $group->title }}</h2>
                            <p>{{ $group->details }}</p>
                        </div>

                        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">
                            @forelse ($group->galleries as $item)
                                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                    <img src="{{ asset('storage/'.str_replace('.', '-medium.', $item->image)) }}" width="100%" class="img-fluid" alt="{{ $item->title }}">
                                    <div class="portfolio-info">
                                        <h4>{{ $item->title }}</h4>
                                        <p>{{ $item->subtitle }}</p>
                                        <a href="{{ asset('storage/'.$item->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $item->title }}"><i class="bx bx-plus"></i></a>
                                        {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
                                    </div>
                                </div>
                            @empty
                                <div class="col-md-12">
                                    <h3 class="text-center text-muted">No hay resultados</h3>
                                </div>
                            @endforelse
                        </div>

                    </div>
                </section>
                <!-- End Portfolio Section -->
            </div>
        </section>
    </main><!-- End #main -->
@endsection