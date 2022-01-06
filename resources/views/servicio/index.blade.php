@extends('layouts.app')

@section('template_title')
    Servicio
@endsection

@section('content')
    <div class="container container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Servicios Ofrecidos') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('servicios.create') }}" class="btn btn-success btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Crear Servicio') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>Nombres</th>
                                        <th>Descripción</th>
                                        <th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($servicios as $servicio)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $servicio->Name }}</td>
                                            <td>{{ $servicio->Description }}</td>
                                            <td>
                                                @if ($servicio->state == 1)
                                                    Activo
                                                @else
                                                    Inactivo
                                                @endif
                                            </td>

                                            <td>

                                                @if ($servicio->state == 1)
                                                    <a class="btn btn-sm btn-danger"
                                                        href="{{ route('servicios.desactivar', $servicio->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> Desactivar</a>
                                                @else
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('servicios.activar', $servicio->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> Activar</a>
                                                @endif
                                                <a class="btn btn-sm btn-warning"
                                                    href="{{ route('servicios.edit', $servicio->id) }}"><i
                                                        class="fa fa-fw fa-edit"></i> Editar</a>


                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $servicios->links() !!}
            </div>
        </div>
    </div>
@endsection
