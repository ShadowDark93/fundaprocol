@extends('layouts.plantilla')

<br><br><br><br>

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header text-align-center">Bienvenido <b>{{ $auth->user()->name }}</b></div>
            </div>

            <div class="container mt-5">
                <div class="row align-items-center">
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://cdn.pixabay.com/photo/2018/03/10/12/00/teamwork-3213924_1280.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body justify-content-around align-items-center">
                                <h5 class="card-title text-center">COLABORADORES</h5>
                                <a href="{{ route('partners.index') }}" class="btn btn-primary d-block mx-auto">ver</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://cdn.pixabay.com/photo/2017/07/06/14/48/organization-2478211_1280.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body justify-content-around align-items-center">
                                <h5 class="card-title text-center">STAFF</h5>
                                <a href="{{ route('staff.index') }}" class="btn btn-primary d-block mx-auto">ver</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://cdn.pixabay.com/photo/2015/10/12/15/07/buildings-984195_1280.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body justify-content-around align-items-center">
                                <h5 class="card-title text-center">FUNDAPROCOL</h5>
                                <a href="{{ route('partners.index') }}" class="btn btn-primary d-block mx-auto">ver</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card">
                            <img src="https://cdn.pixabay.com/photo/2018/08/10/15/39/email-3597088_1280.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body justify-content-around align-items-center">
                                <h5 class="card-title text-center">CONTACTO</h5>
                                <a href="{{ route('partners.index') }}" class="btn btn-primary d-block mx-auto">ver</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection

