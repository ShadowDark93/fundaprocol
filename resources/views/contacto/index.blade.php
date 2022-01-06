@extends('layouts.app')

@section('template_title')
    Contacto
@endsection

@section('content')
    <div class="container container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Contacto') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('contactos.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Create New') }}
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

                                        <th></th>

                                        <th>Nombres</th>
                                        <th>Titulo</th>
                                        <th>Correo</th>
                                        <th>Descripcion</th>
                                        <th>Respuesta</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contactos as $contacto)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>
                                                <a class="btn btn-sm btn-primary "
                                                    href="{{ route('contactos.show', $contacto->id) }}"><i
                                                        class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                <a class="btn btn-sm btn-outline-success"
                                                    href="{{ route('contactos.edit', $contacto->id) }}"><i
                                                        class="fa fa-fw fa-edit"></i> Responder</a>
                                            </td>

                                            <td>{{ $contacto->Nombres }}</td>
                                            <td>{{ $contacto->Titulo }}</td>
                                            <td>{{ $contacto->Correo }}</td>
                                            <td>{{ $contacto->Descripcion }}</td>
                                            <td>{{ $contacto->Respuesta }}</td>
                                            <td>
                                                @if ($contacto->estado == 1)
                                                    Sin respuesta
                                                @else
                                                    Respondido
                                                @endif
                                            </td>


                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $contactos->links() !!}
            </div>
        </div>
    </div>
@endsection
