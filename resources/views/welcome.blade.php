@extends('layouts.master')

@section('seo')
    <title>Bienvenido - ALDB</title>
    <meta name="description" content="Asamblea Legislativa Departamental del Beni">
    <meta name="keywords" content="asamblea, legislativa, beni, trinidad, alcaldia">

    <meta property="og:url"           content="{{ url('') }}" />
    <meta property="og:type"          content="Blog" />
    <meta property="og:title"         content="ALDB" />
    <meta property="og:description"   content="Asamblea Legislativa Departamental del Beni" />
    <meta property="og:image"         content="{{ asset('assets/img/hero-bg.jpg') }}" />
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
            <h1>AQUI ENCOTRARAS</h1>
            <h2>Toda la informacion de la Asamblea Departamental del Beni</h2>
            <a href="#services" class="btn-get-started scrollto">Ver Noticas</a>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                        <h3>ASAMBLEA LEGISLATIVA DEPARTAMENTAL DEL BENI</h3>
                        <p class="fst-italic">
                            El Gobierno Autónomo Departamental del Beni se conforma por el órgano ejecutivo que es la Gobernación y el órgano ejecutivo legislativo denominado Asamblea Legislativa Departamental del Beni.
                        </p>
                        <p class="fst-italic">
                            La Asamblea Legislativa Departamental, es el órgano representativo con facultad deliberativa, legislativa, fiscalizadora, de control y censura del Gobierno Departamental Autónomo del Beni, conforme a lo establecido por la Constitución Política del Estado y por el Estatuto del Departamento Autónomo del Beni.
                        </p>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">

                    <div class="col-lg-4" data-aos="fade-up">
                        <div class="box">
                        <span>56</span>
                        <h4>Leyes</h4>
                        <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
                        <div class="box">
                        <span>12</span>
                        <h4>Resoluciones</h4>
                        <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="box">
                        <span>84</span>
                        <h4>Proyectos</h4>
                        <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">

                <div class="row d-flex align-items-center">

                    <div class="col-lg-3 col-md-3 col-6">
                        <img src="assets/img/flags/flag-1.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-3 col-md-3 col-6">
                        <img src="assets/img/flags/flag-2.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-3 col-md-3 col-6">
                        <img src="assets/img/flags/flag-3.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-3 col-md-3 col-6">
                        <img src="assets/img/flags/flag-4.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-3 col-md-3 col-6">
                        <img src="assets/img/flags/flag-5.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-3 col-md-3 col-6">
                        <img src="assets/img/flags/flag-6.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-3 col-md-3 col-6">
                        <img src="assets/img/flags/flag-7.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-3 col-md-3 col-6">
                        <img src="assets/img/flags/flag-8.png" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Services Section ======= -->
        @php
            $articles = App\Models\Article::where('status', 1)->orderBy('id', 'DESC')->get();
        @endphp
        @if (count($articles) > 0)
            <section id="services" class="services">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <span>últimas Noticas</span>
                        <h2>últimas Noticas</h2>
                        <p>Notas de prensa de la Asamblea Legislativa Departamental del Beni</p>
                    </div>
                    <div class="row gy-5">
                        @foreach ($articles as $item)
                            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                                <a href="{{ url('article/'.$item->slug) }}">
                                    <div class="service-item">
                                        <div class="img" style="height: 200px">
                                            <img src="{{ asset('storage/'.str_replace('.', '-medium.', $item->banner)) }}" class="img-fluid" alt="img">
                                        </div>
                                        <div class="details position-relative" style="height: 220px">
                                            <div style="display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">
                                                <h3>{{ $item->title }}</h3>
                                            </div>
                                            <div style="display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">
                                                <p class="text-secondary">{{ $item->subtitle }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
        <!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="row">
                    <div class="col-md-8">
                        <div class="text-right">
                            <h3>Sesiones en Vivo</h3>
                            <p> Las sesiones de la Asamblea Legislativa Departamental del Beni se transmiten en vivo para transparentar la gestión.</p>
                            <a class="cta-btn" href="{{ setting('site.link_lives') }}" target="_blank">Ingresar a la Sesion</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div style="position: absolute; bottom: -320px; right: 0px">
                        <img src="assets/img/phone.png" class="img-phone" alt="live">
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title">
                <span>Galeria</span>
                <h2>Galeria</h2>
                <p>Galeria de Imagenes de Salutaciones Nacionales, Departamentales y Regionales,Sesiones y notas importantes</p>
                </div>

                <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">Todas</li>
                    <li data-filter=".filter-app">Salutaciones</li>
                    <li data-filter=".filter-card">Sessiones</li>
                    <li data-filter=".filter-web">Notas</li>
                    </ul>
                </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <h4>App 1</h4>
                    <p>App</p>
                    <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <h4>Web 3</h4>
                    <p>Web</p>
                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <h4>App 2</h4>
                    <p>App</p>
                    <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <h4>Card 2</h4>
                    <p>Card</p>
                    <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <h4>Web 2</h4>
                    <p>Web</p>
                    <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <h4>App 3</h4>
                    <p>App</p>
                    <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <h4>Card 1</h4>
                    <p>Card</p>
                    <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <h4>Card 3</h4>
                    <p>Card</p>
                    <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <h4>Web 3</h4>
                    <p>Web</p>
                    <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

    
        <!-- ======= Team Section ======= -->
        {{-- <section id="team" class="team">
            <div class="container">

                <div class="section-title">
                    <span>Asambleistas</span>
                    <h2>Asambleistas</h2>
                    <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
                </div>

                <div class="row">
                    @forelse (App\Models\Person::where('status', 1)->where('show', 1)->get() as $item)
                        @php
                            $image = "images/avatar.jpg";
                            if($item->image){
                                $image = asset('storage/'.str_replace('.', '-cropped.', $item->image));
                            }
                        @endphp
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                            <div class="member">
                                <img src="{{ $image }}" alt="{{ $item->full_name }}">
                                <h4>{{ $item->full_name }}</h4>
                                <span>{{ $item->job }}</span>
                                <div class="social">
                                    <a href="{{ $item->link_facebook ?? '#' }}"><i class="bi bi-facebook"></i></a>
                                    <a href="{{ $item->link_twitter ?? '#' }}"><i class="bi bi-twitter"></i></a>
                                    <a href="{{ $item->link_linkedin ?? '#' }}"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    @empty
                        
                    @endforelse
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="{{ url('people') }}" class="btn btn-success"><i class="bi bi-list"></i> Ver todos</a>
                    </div>
                </div>

            </div>
        </section> --}}
        <!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <span>Contact</span>
                    <h2>Contacto</h2>
                    <!-- ======= <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>  ======= -->
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Nuestra dirección</h3>
                        <p>Calle 9 de Abril S/N entre Av. bolivar y Félix Pinto</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email</h3>
                        <p>asamblealdb2022@gmail.com</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Telefono</h3>
                        <p>(3)-46-34398 - (3)-4638983</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->
@endsection