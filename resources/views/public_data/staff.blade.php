@extends('layouts.app')

@section('template_title')
    Staff
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="card-header my-3">
                <h1 class="text-center">STAFF ADMINISTRATIVO</h1>
            </div>
            
            @foreach ($staff as $sf)
                <div class="card mx-3" style="width:12rem;">
                    <img src="{{ asset($sf->Foto) }}" height="200" width="200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $sf->Nombres }} <h5>
                                <h6 class="card-subtitle mb-2 text-muted text-center">Cargo: {{ $sf->Cargo }}
                                </h6>

                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection
