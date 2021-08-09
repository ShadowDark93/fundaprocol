@extends('layouts.plantilla')

<br><br><br><br>

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">Bienvenido <b>{{ $auth->user()->name }}</b></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <h3>COLABORADORES</h3>
                        </div>
                        <div class="col-3"><H3>STAFF ADMIN</H3></div>
                        <div class="col-3"></div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
