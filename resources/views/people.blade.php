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
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="dark-mask"></div>
            <div class="container" style="position: absolute; z-index: 10; padding: 15px">
                <ol>
                    <li><a href="{{ url('') }}">Inicio</a></li>
                    <li class="text-white">Asambleistas</li>
                </ol>
                <br>
                <h3 class="text-white">{{ request('type') }} de la Asamblea Legislativa Departamental del Beni</h3>
                <br>
            </div>
        </section><!-- End Breadcrumbs -->
        <section class="inner-page">
            <div class="container">
                @php
                    $type = strtolower(request('type'));
                    // dd($type);
                @endphp
                <!-- ======= Team Section ======= -->
                <section id="team" class="team" style="padding-top: 0px">
                    <div class="container">
                        <div class="section-title">
                            <span>{{ $type }}</span>
                            <h2>{{ $type }}</h2>
                            {{-- <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p> --}}
                        </div>
                        <div class="row">
                            @forelse (App\Models\Person::whereRaw("LOWER(type) = '$type'")->where('status', 1)->get() as $item)
                                @php
                                    $image = "images/avatar.jpg";
                                    if($item->image){
                                        $image = asset('storage/'.str_replace('.', '-cropped.', $item->image));
                                    }
                                @endphp
                                <a href="{{ $item->image_alt ? asset('storage/'.$item->image_alt) : $image }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $item->full_name }}">
                                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                                        <div class="member">
                                            <img src="{{ $image }}" alt="">
                                            <h4>{{ $item->full_name }}</h4>
                                            <span>{{ $item->job }}</span>
                                            {{-- <p>
                                                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                                            </p> --}}
                                            <div class="social">
                                                <a href="{{ $item->link_facebook ?? '#' }}"><i class="bi bi-facebook"></i></a>
                                                <a href="{{ $item->link_twitter ?? '#' }}"><i class="bi bi-twitter"></i></a>
                                                <a href="{{ $item->link_linkedin ?? '#' }}"><i class="bi bi-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @empty
                                <div class="col-md-12">
                                    <h4 class="text-center">No hay resultados</h4>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </section>
                <!-- End Team Section -->
            </div>
        </section>
    </main><!-- End #main -->
@endsection