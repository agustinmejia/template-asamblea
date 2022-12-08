<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        
        {{-- SEO --}}
        @yield('seo')
      
        <!-- Favicons -->
        <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
        <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
      
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      
        <!-- Vendor CSS Files -->
        <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
      
        <!-- Template Main CSS File -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
      
        <!-- =======================================================
        * Template Name: Day - v4.8.0
        * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->

        <style>
            .img-phone{
                width: 500px;
            }
            @media (max-width: 575px) {
                #hero {
                    background: url("assets/img/hero-bg.jpg") top left;
                }
                .img-phone{
                    width: 300px;
                }
            }
        </style>

        @yield('css')
    </head>
    <body>
        <!-- ======= Top Bar ======= -->
        <section id="topbar" class="d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">Calle 9 de Abril S/N</a>
                    <i class="bi bi-phone-fill phone-icon"></i> (3)-46-34398

                </div>
                <div class="social-links d-none d-md-block">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
                </div>
            </div>
        </section>

        <!-- ======= Header - Pestañas Principales ======= -->
        <header id="header" class="d-flex align-items-center">
            <div class="container d-flex align-items-center justify-content-between">

            <!--  <h1 class="logo"><a href="index.html">Day</a></h1>-->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="{{ url('') }}" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

            @php
                $url = explode('/', url()->current());
                if(count($url) == 3){
                    $uri = 'home';
                }else {
                    $uri = $url[3];
                }
            @endphp
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto @if($uri == 'home') active @endif" href="{{ url('') }}">Inicio</a></li>
                    <li class="dropdown @if($uri == 'about') active @endif"><a href="#"><span>Marco Constitucional</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('about') }}">Quienes somos</a></li>
                            <li><a href="{{ url('mision-vision') }}">Misión y visión</a></li>
                            <li><a href="{{ url('organigrama') }}">Organigrama</a></li>
                            <li><a href="{{ url('capacities') }}">Facultades</a></li>
                        </ul>
                    </li>
                    <li class="dropdown @if($uri == 'comision') active @endif"><a href="#"><span>Comisión</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('comision/constitucion') }}">Comisión de constitución</a></li>
                            <li><a href="{{ url('comision/realaciones_internacionales') }}">Comisión de relaciones internacionales</a></li>
                            <li><a href="{{ url('comision/hacienda') }}">Comisión de hacienda y presupuesto</a></li>
                            <li><a href="{{ url('comision/desarrollo_humano') }}">Comisión de desarrollo humano</a></li>
                            <li><a href="{{ url('comision/derechos_humanos') }}">Comisión de derechos humanos</a></li>
                            <li><a href="{{ url('comision/desarrollo_economico') }}">Comisión de desarrollo económico</a></li>
                            <li><a href="{{ url('comision/obras_publicas') }}">Comisión de obras públicas</a></li>
                        </ul>
                    </li>
                    <li class="dropdown @if($uri == 'bancadas') active @endif"><a href="#"><span>Bancadas</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            @forelse (App\Models\Group::where('deleted_at', NULL)->get() as $item)
                                <li><a href="{{ url('bancadas/'.$item->slug) }}">{{ $item->title }}</a></li>
                            @empty
                                <li>Sin datos</li>
                            @endforelse
                        </ul>
                    </li>
                    <li class="dropdown @if($uri == 'people') active @endif"><a href="#"><span>Asambleistas</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('people') }}?type=Directiva">Directiva</a></li>
                            <li><a href="{{ url('people') }}?type=Asambleistas Titulares">Asambleistas Titulares</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto @if($uri == 'gaceta') active @endif" href="{{ url('gaceta') }}">Gaceta</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

            </div>
        </header>
        <!-- End Header -->

        @yield('content')

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-md-6">
                            <div class="footer-info">
                                <h3>ALDB</h3>
                                <p>
                                    Calle 9 de Abril S/N <br>
                                    Santísima Trinidad, Beni<br><br>
                                    <strong>Telefono:</strong> (3)-46-34398<br>
                                    <strong>Email:</strong> info@example.com<br>
                                </p>
                                <div class="social-links mt-3">
                                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- ======= Footer - del medio ======= -->
                        <!-- <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Our Services</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                            </ul>
                        </div> -->

                        <div class="col-lg-4 col-md-6 footer-newsletter">
                            @if (env('APP_DEBUG') == false)
                                <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1324.7954188201188!2d-64.90132041836014!3d-14.83169361935661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93dd6e2b515935e1%3A0xea158f73ebf5d5fa!2s539X%2BJRC%2C%20Trinidad!5e0!3m2!1ses!2sbo!4v1659934015706!5m2!1ses!2sbo" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Day</span></strong>. Todos los Derechos Reservados de la ALDB
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
                    Diseñado por <a href="https://bootstrapmade.com/">Unidad Informatica</a>
                </div>
            </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('assets/js/main.js') }}"></script>

        @yield('script')
    </body>
</html>