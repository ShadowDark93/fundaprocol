@extends('layouts.app')

@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(img/fondo.png);">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp text-center">
                            <h2>Bienvenidos a <span>Fundaprocol DDHH</span></h2>
                            <p>Somos una Organización sin ánimos de lucro que busca ayudar a la población civil.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item"
                    style="background-image: url(https://cdn.pixabay.com/photo/2016/12/19/10/16/hands-1917895_960_720.png);">
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

        <section id="social-networks" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>REDES SOCIALES</h2>
                </div>

                <div class="row" align="center">
                    @if (isset($data->Facebook))
                        <div class="col-sm-1 card-body">
                            <a href="{{ $data->Facebook }}" class="text-center" target="_blank"><img
                                    src="https://img.icons8.com/color/100/000000/facebook.png" /></a>
                        </div>
                    @endif

                    @if (isset($data->Twitter))
                        <div class="col-sm-1 card-body">
                            <a href="{{ $data->Twitter }}" class="text-center" target="_blank"><img
                                    src="https://img.icons8.com/color/100/000000/twitter--v2.png" /></a>
                        </div>
                    @endif

                    @if (isset($data->Instagram))
                        <div class="col-sm-1 card-body">
                            <a href="{{ $data->Instagram }}" class="text-center" target="_blank"><img
                                    src="https://img.icons8.com/cute-clipart/100/000000/instagram-new.png" /></a>
                        </div>
                    @endif

                    @if (isset($data->Linkedin))
                        <div class="col-sm-1 card-body">
                            <a href="{{ $data->Linkedin }}" class="text-center" target="_blank"><img
                                    src="https://img.icons8.com/fluency/100/000000/linkedin.png" /></a>
                        </div>
                    @endif

                    @if (isset($data->Instagram))
                        <div class="col-sm-1 card-body">
                            <a href="{{ $data->Instagram }}" class="text-center" target="_blank"><img
                                    src="https://img.icons8.com/fluency/100/000000/youtube.png" /></a>
                        </div>
                    @endif

                    @if (isset($data->Cel))
                        <div class="col-sm-1 card-body">
                            <a href="http://wa.me/57{{ $data->Cel }}" class="text-center" target="_blank"><img
                                    src="https://img.icons8.com/fluency/100/000000/whatsapp.png" /></a>
                        </div>
                    @endif

                </div>
            </div>
        </section>

        <!-- ======= Services Section ======= -->

        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Servicios</h2>
                </div>

                <div class="row">
                    @foreach ($servicios as $servicio)
                        <div class="col-sm-3" data-aos="zoom-in" data-aos-delay="100">
                            <div class="card" style="width:18rem;">
                                <div class="card-body">
                                    <h5 class="card-title text-center"
                                        style="color: rgb(33, 204, 56); text-transform: uppercase;">{{ $servicio->Name }}
                                    </h5>
                                    <p class="card-text">{{ $servicio->Description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                            <p class="text-center">{{ $p->Nombre }}</p>
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
                                    <h4>Correo:</h4>
                                    <a href="mailto:{{ $data->Correo }}">{{ $data->Correo }}</a>
                                    {{-- <p>info@example.com<br>contact@example.com</p> --}}
                                </div>

                                <div class="col-lg-6 info mt-4 mt-lg-0">
                                    <i class="bi bi-phone"></i>
                                    <h4>Teléfono:</h4>
                                    <a href="tel:{{ $data->Cel }}">{{ $data->Cel }}</a>
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
                        <div class="info-wrap">
                            <form method="POST" action="{{ route('contactos.store') }}" role="form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        {{ Form::label('Nombres') }}
                                        {{ Form::text('Nombres', '', ['class' => 'form-control' . ($errors->has('Nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres', 'required' => '']) }}
                                        {!! $errors->first('Nombres', '<div class="invalid-feedback">:message</p>') !!}
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        {{ Form::label('Correo') }}
                                        {{ Form::email('Correo', '', ['class' => 'form-control' . ($errors->has('Correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo', 'required' => '']) }}
                                        {!! $errors->first('Correo', '<div class="invalid-feedback">:message</p>') !!}
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    {{ Form::label('Titulo') }}
                                    {{ Form::text('Titulo', '', ['class' => 'form-control' . ($errors->has('Titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo', 'required' => '']) }}
                                    {!! $errors->first('Titulo', '<div class="invalid-feedback">:message</p>') !!}
                                </div>
                                <div class="form-group mt-3">
                                    <div class="form-group">
                                        {{ Form::label('Descripcion') }}
                                        {{ Form::textarea('Descripcion', '', ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'rows' => '5', 'placeholder' => 'Descripcion', 'required' => '']) }}
                                        {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</p>') !!}
                                    </div>
                                </div>
                                <br>
                                <div class=" text-center"><button class="btn btn-success text-center" type="submit">Enviar
                                        Mensaje</button></div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <br><br><br>
        <!-- Contact Section Ends -->
    </main><!-- End #main -->

@endsection
