@extends('layouts.app')

@section('template_title')
    Partner
@endsection

@section('content')
    <div class="container container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Partners') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('partners.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Crear Partner') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @elseif ($message = Session::get('error'))
                    <div class="alert alert-danger">
                            <p>No se ha encontrado Partner.</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>Nombre</th>
                                        <th>Url</th>
                                        <th>Telefono</th>
                                        <th>Direccion</th>
                                        <th>Imagen</th>
                                        <th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($partners as $partner)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $partner->Nombre }}</td>
                                            <td>{{ $partner->url }}</td>
                                            <td>{{ $partner->Telefono }}</td>
                                            <td>{{ $partner->Direccion }}</td>
                                            <td><img src="{{ asset($partner->Imagen) }}" height="40" width="80"></td>
                                            <td>
                                                @if ($partner->Estado == 1)
                                                    Activo
                                                @else
                                                    Inactivo
                                                @endif
                                            </td>

                                            <td>
                                                <a class="btn btn-sm btn-warning"
                                                    href="{{ route('partners.edit', $partner->id) }}"><i
                                                        class="fa fa-fw fa-edit"></i> Edit</a>
                                                @if ($partner->Estado == 1)
                                                    | <a class="btn btn-sm btn-danger"
                                                        href="{{ route('partners.desactivar', $partner->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> Desactivar</a>
                                                @else
                                                    | <a class="btn btn-sm btn-success"
                                                        href="{{ route('partners.activar', $partner->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> Activar</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $partners->links() !!}
            </div>
        </div>
    </div>
@endsection
