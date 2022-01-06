@extends('layouts.app')

@section('template_title')
    {{ $data->name ?? 'Show Data' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Data</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('data.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nit:</strong>
                            {{ $data->Nit }}
                        </div>
                        <div class="form-group">
                            <strong>Cel:</strong>
                            {{ $data->Cel }}
                        </div>
                        <div class="form-group">
                            <strong>Mision:</strong>
                            {{ $data->Mision }}
                        </div>
                        <div class="form-group">
                            <strong>Vision:</strong>
                            {{ $data->Vision }}
                        </div>
                        <div class="form-group">
                            <strong>Principios:</strong>
                            {{ $data->Principios }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $data->Correo }}
                        </div>
                        <div class="form-group">
                            <strong>Facebook:</strong>
                            {{ $data->Facebook }}
                        </div>
                        <div class="form-group">
                            <strong>Instagram:</strong>
                            {{ $data->Instagram }}
                        </div>
                        <div class="form-group">
                            <strong>Linkedin:</strong>
                            {{ $data->Linkedin }}
                        </div>
                        <div class="form-group">
                            <strong>Youtube:</strong>
                            {{ $data->Youtube }}
                        </div>
                        <div class="form-group">
                            <strong>Twitter:</strong>
                            {{ $data->Twitter }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
