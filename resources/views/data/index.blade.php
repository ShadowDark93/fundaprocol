@extends('layouts.app')

@section('template_title')
    Datos Fundaprocol
@endsection

@section('content')
    <div class="container container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Datos Fundaprocol') }}
                            </span>

                            {{-- <div class="float-right">
                                <a href="{{ route('data.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                            </div> --}}
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
                                        <th>Operaciones</th>
                                        <th>Nit</th>
                                        <th>Cel</th>
                                        <th>Correo</th>
                                        <th>Facebook</th>
                                        <th>Instagram</th>
                                        <th>Linkedin</th>
                                        <th>Youtube</th>
                                        <th>Twitter</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $data)
                                        <tr>
                                            <td>
                                                <a class="btn btn-sm btn-primary "
                                                    href="{{ route('data.show', $data->id) }}"><i
                                                        class="fa fa-fw fa-eye"></i> Mostrar Datos</a>
                                                <a class="btn btn-sm btn-success"
                                                    href="{{ route('data.edit', $data->id) }}"><i
                                                        class="fa fa-fw fa-edit"></i> Editar Datos</a>
                                            </td>
                                            <td>{{ $data->Nit }}</td>
                                            <td>{{ $data->Cel }}</td>
                                            <td>{{ $data->Correo }}</td>
                                            <td>{{ $data->Facebook }}</td>
                                            <td>{{ $data->Instagram }}</td>
                                            <td>{{ $data->Linkedin }}</td>
                                            <td>{{ $data->Youtube }}</td>
                                            <td>{{ $data->Twitter }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- {!! $data->links() !!} --}}
            </div>
        </div>
    </div>
@endsection
