@extends('layouts.app')

@section('template_title')
    Staff
@endsection

@section('content')
    <div class="container container container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Staff Administrativo') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('staff.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Crear Administrativo') }}
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
                                        <th>Apellidos</th>
                                        <th>Cargo</th>
                                        <th>Telefono</th>
                                        <th>Foto</th>
                                        <th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($staff as $staff)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $staff->Nombres }}</td>
                                            <td>{{ $staff->Apellidos }}</td>
                                            <td>{{ $staff->Cargo }}</td>
                                            <td>{{ $staff->Telefono }}</td>
                                            <td><img src=" {{ asset($staff->Foto)}}" height="60" width="60"></td>
                                            <td>
                                                @if ($staff->Estado == 1)
                                                    Activo
                                                @else
                                                    Inactivo
                                                @endif
                                            </td>

                                            <td>
                                                @if ($staff->Estado == 1)
                                                    <a class="btn btn-sm btn-danger "
                                                    href="{{ route('staff.desactivar', $staff->id) }}"><i
                                                        class="fa fa-fw fa-eye"></i> Desactivar</a>
                                                @else
                                                    <a class="btn btn-sm btn-success "
                                                    href="{{ route('staff.activar', $staff->id) }}"><i
                                                        class="fa fa-fw fa-eye"></i> Activar</a>
                                                @endif
                                                <a class="btn btn-sm btn-warning"
                                                    href="{{ route('staff.edit', $staff->id) }}"><i
                                                        class="fa fa-fw fa-edit"></i> Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
