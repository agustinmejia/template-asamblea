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
            <a href="#about" class="btn-get-started scrollto">Ver Noticas</a>
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
                        <h3>ASAMBLEA LEGISLATIVA DEPARTAMENTAL DEL BENI.</h3>
                        <p class="fst-italic">
                            La Asamblea Legislativa Departamental, es el órgano representativo con facultad deliberativa, legislativa, fiscalizadora, 
                            de control y censura del Gobierno Departamental Autónomo del Beni, conforme a lo establecido por la Constitución Política del Estado y por el Estatuto del Departamento Autónomo del Beni.
                            ASAMBLEA LEGISLATIVA DEPARTAMENTAL DEL BENI
                        </p>
                        
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

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
        {{-- <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <span>Ultimas Noticas</span>
                    <h2>Ultimas Noticas</h2>
                    <p>Notas de prensa de la Asamblea Legislativa Departamental del Beni</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a href="">Lorem Ipsum</a></h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
                        <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="">Sed ut perspiciatis</a></h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a href="">Magni Dolores</a></h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
                        <div class="icon-box">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4><a href="">Nemo Enim</a></h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="icon-box">
                        <div class="icon"><i class="bx bx-slideshow"></i></div>
                        <h4><a href="">Dele cardo</a></h4>
                        <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
                        <div class="icon-box">
                        <div class="icon"><i class="bx bx-arch"></i></div>
                        <h4><a href="">Divera don</a></h4>
                        <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                        </div>
                    </div>

                </div>

            </div>
        </section> --}}
        <!-- End Services Section -->

        <!-- ======= Services Section ======= -->
        @php
            $articles = App\Models\Article::where('status', 1)->get();
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
                        <a class="cta-btn" href="#">Ingresar a la Sesion</a>
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
        <section id="team" class="team">
            <div class="container">

                <div class="section-title">
                    <span>Asambleistas</span>
                    <h2>Asambleistas</h2>
                    <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
                </div>

                <div class="row">
                    @forelse (App\Models\Person::where('status', 1)->where('show', 1)->get() as $item)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                            <div class="member">
                                <img src="assets/img/team/team-1.jpg" alt="">
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
                    @empty
                        
                    @endforelse
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="{{ url('people') }}" class="btn btn-success"><i class="bi bi-list"></i> Ver todos</a>
                    </div>
                </div>

            </div>
        </section>
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
                <!-- =======
                <div class="row" data-aos="fade-up">

                <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1324.7954188201188!2d-64.90132041836014!3d-14.83169361935661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93dd6e2b515935e1%3A0xea158f73ebf5d5fa!2s539X%2BJRC%2C%20Trinidad!5e0!3m2!1ses!2sbo!4v1659934015706!5m2!1ses!2sbo" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
                
                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>  

                </div> ======= -->

            </div>
        </section><!-- End Contact Section -->

    </main>
    <!-- End #main -->
@endsection