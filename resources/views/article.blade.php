@extends('layouts.master')

@section('seo')
    <title>{{ $article->title }} - ALDB</title>
    <meta name="description" content="{{ $article->subtitle }}">
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
            min-height: 380px !important;
            background: url('{{ asset('storage/'.$article->banner) }}') center;
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
                    <li class="text-white">Noticias</li>
                </ol>
                <br>
                <h3 class="text-white">{{ $article->title }}</h3>
                <small class="text-white" style="font-size: 14px">{{ $article->subtitle }}</small> <br>
                <small class="text-white" style="font-size: 12px"><i>Publicado el {{ date('d/M/Y', strtotime($article->publish_date)) }}</i></small>
                <br>
            </div>
        </section><!-- End Breadcrumbs -->
        <section class="inner-page">
            <div class="container">
                {!! $article->body !!}
            </div>
        </section>
    </main><!-- End #main -->
@endsection