@extends('layouts.app')

@section('template_title')
    Staff
@endsection

@section('content')

    <div class="container contact">
        <div class="row">
            <div class="card-header my-3">
                <h1 class="text-center">NOSOTROS</h1>
            </div>
            <div class="info-wrap mt-3">
                <div class="row">
                    <h3>Misión</h3>
                    <p align="justify">{{ $data->Mision }}}</p>
                </div>
            </div>

            <div class="info-wrap mt-3">
                <div class="row">
                    <h3>Visión</h3>
                    <p align="justify">{{ $data->Vision }}}</p>
                </div>
            </div>

            <div class="info-wrap mt-3">
                <div class="row">
                    <h3>Principios</h3>
                    <p align="justify">{{ $data->Principios }}</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>

@endsection
