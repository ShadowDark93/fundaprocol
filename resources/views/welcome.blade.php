@extends('layouts.plantilla')

@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active"
                    style="background-image: url(img/fondo.png);">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp text-center">
                            <h2>Bienvenidos a <span>Fundaprocol DDHH</span></h2>
                            <p>Somos una Organización sin ánimos de lucro que busca ayudar a la población civil.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(https://cdn.pixabay.com/photo/2016/12/19/10/16/hands-1917895_960_720.png);">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2>Bienvenidos a <span>Fundaprocol DDHH</span></h2>
                            <p>Mesa Nacional Efectiva de víctimas como Organización Defensora de Víctimas. .</p>
                            {{-- <div class="text-center"><a href="" class="btn-get-started">Saber más</a></div> --}}
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(img/slide/slide-2.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2>Bienvenidos a <span>Fundaprocol DDHH</span></h2>
                            <p>Consejeros Territoriales de Paz/Convivencia/reconciliación del Tolima e Ibagué.</p>
                            {{-- <div class="text-center"><a href="" class="btn-get-started">Saber más</a></div> --}}
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us">
            <div class="container" data-aos="fade-up">

                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-right">
                        <h2>La fundación protección Colombia de los Derechos Humanos</h2>
                        <h4 align="justify">FUNDAPROCOL DDHH ejerce ejercicio de veeduría, de coadyuvancia, de intervención,
                            de acompañamiento, de garantías de derechos, entre otros, en procesos que beneficien a la
                            comunidad colombiana/ tolimense/ ibaguereña dentro de las cuales podemos indicar los espacios en
                            los cuales participamos:</h6>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                        <ul>
                            <li><i class="ri-check-double-line"></i> Mesa Nacional Efectiva de víctimas como Organización
                                Defensora de Víctimas.
                            </li>
                            <li><i class="ri-check-double-line"></i> Consejeros Territoriales de
                                Paz/Convivencia/reconciliación del Tolima e Ibagué.</li>
                            <li><i class="ri-check-double-line"></i> Veedurías ciudadanas.</li>
                            <li><i class="ri-check-double-line"></i> Acompañamiento permanente en manifestaciones pacíficas
                                del orden nacional/departamental/municipal.</li>
                            <li><i class="ri-check-double-line"></i> Integrantes de Fedecolpaz, red de derechos humanos del
                                Tolima con incidencia nacional.</li>
                            <li><i class="ri-check-double-line"></i> Convenios interadministrativos de trabajo/capacitación,
                                sin costo alguno, con universidades/ entes de control.</li>
                            <li><i class="ri-check-double-line"></i> Ciertos integrantes de fundaprocolddhh hacen parte de
                                consejeros Territoriales de planeación, de estratificación, gremios, JAC, asojuntas, etc.
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->

        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Servicios</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                    </path>
                                </svg>
                                <i class="bx bxl-dribbble"></i>
                            </div>
                            <h4><a href="">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- ======= Services Section ======= -->

        <!-- ======= Our Patrocinadores Section ======= -->
        <section id="partners" class="clients">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Colaboradores</h2>
                </div>

                <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">
                    @foreach ($partner as $p)
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="client-logo">
                                <a href="{{ $p->url }}"><img src="{{ $p->Imagen }}" class="img-fluid"
                                        alt="{{ $p->Nombre }}">{{ $p->nombre }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Our Patrocinadores Section -->

        <!-- Contact Section Begin -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contáctanos</h2>
                </div>

                <div class="row justify-content-center aos-init aos-animate" data-aos="fade-up">
                    <div class="col-lg-10">
                        <div class="info-wrap">
                            <div class="row">
                                <div class="col-lg-6 info mt-4 mt-lg-0">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>info@example.com<br>contact@example.com</p>
                                </div>

                                <div class="col-lg-6 info mt-4 mt-lg-0">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row mt-5 justify-content-center aos-init aos-animate" data-aos="fade-up">
                    <div class="section-title mt-4">
                        <h2>Cuéntanos tu caso</h2>
                    </div>
                    <div class="col-lg-10">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Nombres"
                                        required="">
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Correo">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Título">
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Mensaje detallado"
                                    required=""></textarea>
                            </div>
                            <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section>
        <!-- Contact Section Ends -->
    </main><!-- End #main -->

@endsection
