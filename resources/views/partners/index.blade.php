@extends('layouts.plantilla')


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">

                    <div class="col-sm mb-3">
                        <div class="row">
                            <div>
                                <a href="#" class="btn btn-outline-success"
                                    qeclass="btn btn-success float-right">Agregar</a>
                            </div>
                        </div>
                    </div>
                    <table id="inventario"
                        class="table table-striped table-hover table-bordered table-responsive{-sm|-md|-lg|-xl|-xxl">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">WEB</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Operaciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($patrocinadores as $p)
                                <tr>
                                    <th scope="row">{{ $p->id }}</th>
                                    <td>{{ $p->Nombre }}</td>
                                    <td>{{ $p->url }}</td>
                                    <td>{{ $p->Telefono }}</td>
                                    <td>{{ $p->Direccion }}</td>
                                    <td>{{ $p->imagen }}</td>
                                    <td>
                                        @if ($p->state == 1)
                                            Activo
                                        @else
                                            Inactivo
                                        @endif
                                    </td>
                                    <td>
                                        @if ($p->state == 0)
                                            {{-- <a href="{{ route('productos.enable', $p->id) }}"
                                                class="btn btn-success">Activar</a> --}}
                                        @else
                                            {{-- <a href="{{ route('productos.disable', $p->id) }}"
                                                class="btn btn-danger">Desactivar</a> --}}
                                        @endif |
                                        {{-- <a href="{{ route('productos.edit', $p->id) }}" class="btn btn-primary">Editar</a> --}}
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

    <script>
        $('#inventario').DataTable({
            responsive: true,
            autoWidth: false,
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "No hay nada para mostrar - disculpa",
                "info": "Mostrando _PAGE_ de _PAGES_",
                "infoEmpty": "No existen registros disponibles",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "buscar",
                "paginate": {
                    'next': "Siguiente",
                    'previous': "Anterior"
                }
            }
        });
    </script>

    @if (session('created') == 'ok')
        <script>
            Swal.fire({
                icon: 'success',
                position: 'center',
                icon: 'success',
                title: 'El elemento se ha creado de manera correcta',
                showConfirmButton: false,
                timer: 3000
            })
        </script>
    @endif

    @if (session('edited') == 'ok')
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'El elemento ha sido editado de manera correcta',
                showConfirmButton: false,
                timer: 3000
            })
        </script>
    @endif

    @if (session('disable') == 'ok')
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'El elemento ha sido dado de baja',
                showConfirmButton: false,
                timer: 3000
            })
        </script>
    @endif

    @if (session('enable') == 'ok')
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'El elemento ha sido deshabilitado',
                showConfirmButton: false,
                timer: 3000
            })
        </script>
    @endif



@endsection
