@extends('layouts.master')

@section('seo')
    <title>Gaceta - ALDB</title>
    <meta name="description" content="Publicación de Leyes, Decretos y Resoluciones">
    <meta name="keywords" content="asamblea, legislativa, beni, trinidad, alcaldia">

    <meta property="og:url"           content="{{ url('') }}" />
    <meta property="og:type"          content="Blog" />
    <meta property="og:title"         content="ALDB" />
    <meta property="og:description"   content="Publicación de Leyes, Decretos y Resoluciones" />
    <meta property="og:image"         content="{{ asset('assets/img/banner-gaceta.jpg') }}" />
@endsection

@section('css')
    <style>
        .breadcrumbs{
            min-height: 380px !important;
            background: url('{{ asset("assets/img/banner-gaceta.jpg") }}') center top -100px;
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
        /* .text-ellipsis{
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        } */
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
                    <li class="text-white">Gaceta</li>
                </ol>
                <br>
                <h3 class="text-white">Bienvenido a Gaceta de la ALDB</h3>
                {{-- <br> --}}
                <p class="text-white">Es el instrumento informativo que tiene por objeto publicar de manera permanente las Leyes, Decretos y de Gobernación, Resoluciones y sobre todo cualquier otro documento de carácter general que emita la Asamblea Legislativa del Beni.</p>
            </div>
        </section><!-- End Breadcrumbs -->
        <section class="inner-page">
            <div class="container">
                <!-- ======= Team Section ======= -->
                <section id="why-us" class="why-us" style="padding-top: 0px">
                    <div class="container">
                        <div class="section-title">
                            <span>Gaceta</span>
                            <h2>Gaceta</h2>
                            <p>Es el instrumento informativo que tiene por objeto publicar de manera permanente las Leyes, Decretos y de Gobernación, Resoluciones y sobre todo cualquier otro documento de carácter general que emita la Asamblea Legislativa del Beni.</p>
                        </div>
                        <div class="row">
                            @forelse (App\Models\PublicationsCategory::where('deleted_at', null)->get() as $item)
                                <div class="col-lg-3 mb-2" data-aos="fade-up">
                                    <a href="{{ url('gaceta/'.$item->slug) }}" class="text-black">
                                        <div class="box" style="min-height: 450px !important">
                                            <div class="text-ellipsis" style="-webkit-line-clamp: 1;">
                                                <h4 class="text-center">{{ $item->title }}</h4>
                                            </div>
                                            <ul>
                                                @foreach ($item->types as $type)
                                                    <li>
                                                        <div class="text-ellipsis" style="-webkit-line-clamp: 1;">
                                                            {{ $type->title }}
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </a>
                                </div>
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