@extends('layouts.plantilla')



<br><br><br>

@section('content')

    <!-- ======= Start Our Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Nuestro <strong>Equipo</strong></h2>
                <p>Este es nuestro equipo de trabajo</p>
            </div>

            <div class="row">
                @foreach ($staff as $st)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <img src="img/team/team-1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>{{ $st->Nombres }} {{ $st->Apellidos }}</h4>
                                <span>Cargo: {{ $st->Cargo }}</span>
                                <a href="tel:+57{{ $st->Telefono }}"> <span>{{ $st->Telefono }}</span> </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End Our Team Section -->

@endsection