@extends('layouts.master')

@section('seo')
    <meta name="description" content="{{ $article->title }}">
    <meta name="keywords" content="">

    <meta property="og:url"           content="{{ url('article/'.$article->slug) }}" />
    <meta property="og:type"          content="Blog" />
    <meta property="og:title"         content="{{ $article->title }}" />
    <meta property="og:description"   content="{{ $article->subtitle }}" />
    <meta property="og:image"         content="{{ asset('storage/'.$article->banner) }}" />
@endsection

@section('css')
    <style>
        .breadcrumbs{
            height: 200px !important;
            background: url('{{ asset('storage/'.$article->banner) }}') center;
            background-size: cover;
            position: relative;
        }
        .dark-mask{
            width: 100%;
            height: 100%;
            z-index: 0px;
            background-color: rgba(255,255,255,0.7);
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
            <div class="container" style="position: absolute; z-index: 100; padding: 15px">
                <ol>
                    <li><a href="{{ url('') }}">Inicio</a></li>
                    <li>Noticia</li>
                </ol>
                <h2>{{ $article->title }} <br> <small class="text-secondary" style="font-size: 15px">{{ $article->subtitle }}</small></h2>
            </div>
        </section><!-- End Breadcrumbs -->
        <section class="inner-page">
            <div class="container">
                {!! $article->body !!}
            </div>
        </section>
    </main><!-- End #main -->
@endsection