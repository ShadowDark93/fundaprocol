<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Fundaprocol DDHH</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/favicon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- AdSense -->
    <script data-ad-client="ca-pub-4588741894951441" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Company - v4.3.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <a href="{{ route('index') }}" class="logo me-auto me-lg-0"><img src="{{ asset('img/favicon.png') }}"
                    alt="" class="img-fluid"></a>
            <h1 class="logo me-auto"><a href="{{ route('index') }}"><span>FUNDAPROCOL</span> DDHH</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->

            <nav id="navbar" class="navbar order-last order-lg-0">
                @guest()
                    <ul>
                        <li><a href="{{ route('index') }}" class="active">Inicio</a></li>

                        <li class="dropdown"><a href="{{ route('home') }}"><span>Nosotros</span> <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href={{ route('index.about') }}>Sobre Nosotros</a></li>
                                <li><a href={{ route('index.staff') }}>Equipo</a></li>
                            </ul>
                        </li>
                        <li><a href="/#services">Servicios</a></li>
                        <li><a href="/#partners">Colaboradores</a></li>
                        <li><a href="/#contact">Contacto</a></li>
                        <li class="dropdown"><a href=""><span>Redes Sociales</span> <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="{{ $data->Twitter }}" class="twitter" target="_blank"><i class="bu bi-twitter"> Twitter</i></a></li>
                                <li><a href="{{ $data->Facebook }}" class="facebook" target="_blank"><i class="bu bi-facebook"> Facebook</i></a></li>
                                <li><a href="{{ $data->Instagram }}" class="instagram" target="_blank"><i class="bu bi-instagram"> Instagram</i></a></li>
                                <li><a href="{{ $data->Linkedin }}" class="linkedin" target="_blank"><i class="bu bi-linkedin"> Linkedin</i></a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Intranet</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                @if (Route::has('login'))
                                    <div class="nav-link scrollto">
                                        @auth
                                            <a href="{{ url('/home') }}" class="nav-link scrollto">Inicio</a>
                                        @else
                                            <a href="{{ route('login') }}" class="nav-link scrollto">Ingresar</a>
                                        @endauth
                                    </div>
                                @endif
                            </ul>
                        </li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                @else
                    <ul>
                        <li><a href="{{ route('home') }}">Inicio</a></li>
                        <li><a href="{{ route('partners.index') }}">Colaboradores</a></li>
                        <li><a href="{{ route('staff.index') }}">Staff Administrativo</a></li>
                        <li><a href="{{ route('data.index') }}">Datos</a></li>
                        <li><a href="{{ route('servicios.index') }}">Servicios</a></li>
                        <li><a href="{{ route('contactos.index') }}">Contactos</a></li>
                        <li><a class="nav-link scrollto active" href="http://wa.me/573185572439" target="_blank">Soporte
                                técnico</a></li>

                        <li class="dropdown"><a href="#"><span>Intranet</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li class="nav-item dropdown">
                                    <div class="nav-link scrollto" aria-labelledby="navbarDropdown">
                                        <a class="nav-link scrollto" href="{{ route('home') }}">
                                            {{ Auth::user()->name }}
                                        </a>
                                    </div>
                                    <div class="nav-link scrollto" aria-labelledby="navbarDropdown">
                                        <a class="nav-link scrollto" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                            {{ __('Cerrar sesion') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                @endguest
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <br><br><br><br>
    @yield('content')


    @yield('js')

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Company</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form:
                         https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
                    Powered by <a href="https://smartandcomputer.co/">Smart And Computer</a>
                    <br>
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>

                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Custom Footer -->
    <script src="{{ asset('js/custom_footer.js') }}"></script>


</body>

</html>
