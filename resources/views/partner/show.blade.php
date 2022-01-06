@extends('layouts.app')

@section('template_title')
    {{ $partner->name ?? 'Show Partner' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Partner</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('partners.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $partner->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $partner->url }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $partner->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $partner->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $partner->Imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $partner->Estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
