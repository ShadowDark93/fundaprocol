@extends('layouts.app')

@section('template_title')
    {{ $staff->name ?? 'Show Staff' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Staff</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('staff.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $staff->Nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $staff->Apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo:</strong>
                            {{ $staff->Cargo }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $staff->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            {{ $staff->Foto }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $staff->Estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
