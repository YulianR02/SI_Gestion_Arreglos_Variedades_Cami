@extends('layouts._admin')
@section('title', 'Mis arreglos')
@section('breadcrumb')
    <li class="breadcrumb-item">@yield('title')</li>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">Mis arreglos</h2>
                </div>
                <div class="card-tools">
                    @can('arreglos.create')
                        <a type="button" class="btn btn-tool" href="{{ route('arreglos.create') }}">
                            <h3 class="card-title"><i class="fas fa-plus"></i> Agregar </h3>
                        </a>
                    @endcan
                </div>
                <div class="dropdown-divider"></div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
                            <thead>
                                <tr style="text-align: center">
                                    <th class="wd-15p"><strong>Cliente</strong></th>
                                    <th class="wd-15p">Estado</th>
                                    <th class="wd-15p">Fecha Realizacion</th>
                                    <th class="wd-15p">Fecha Entrega</th>
                                    <th class="wd-15p">Observar</th>
                                    <th class="wd-15p">Editar</th>
                                    <th class="wd-15p">Eliminar</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($misArreglos as $miArreglo)
                                    <tr class="table-Light" style="text-align: center">
                                        <th>{{ $miArreglo->user->name }}</th>
                                        @if ($miArreglo->EstadoArreglo == 'Terminado')
                                            <th class="table-success">{{ $miArreglo->EstadoArreglo }}</th>
                                        @elseif ($miArreglo->EstadoArreglo == 'En Proceso')
                                            <th class="table-warning">{{ $miArreglo->EstadoArreglo }}</th>
                                        @else
                                            <th class="table-primary">{{ $miArreglo->EstadoArreglo }}</th>
                                        @endif
                                        <th>{{ $miArreglo->created_at }}</th>
                                        <th>{{ $miArreglo->FechaEntrega }}</th>
                                        <th>
                                            <a class="btn btn-info" href="{{ route('misarreglos.show', $miArreglo->id) }}">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </th>
                                        @if ($miArreglo->EstadoArreglo == 'Recibido')
                                            <th>
                                                <a class="btn btn-info"
                                                    href="{{ route('arreglos.edit', $miArreglo->id) }}">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </th>
                                            <th>
                                                <form action="{{ route('arreglos.destroy', $miArreglo->id) }}"
                                                    class="deleteArreglos" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </th>
                                        @else
                                            <th >
                                                Accion <br>
                                                no disponible
                                            </th>
                                            <th >
                                                Accion <br>
                                                no disponible
                                            </th>


                                        @endif

                                    </tr>
                                    {{-- @endif --}}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
@section('scripts')
    @if (session('delete') == 'Ok')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'El miArreglo ha sido eliminado.',
                'success'

            )
        </script>
    @endif

    <script>
        $('.deleteArreglos').submit(function(e) {
            e.preventDefault();
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: '¿Estas seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: '¡Sí, bórralo!',
                cancelButtonText: '¡No, cancelar!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelado',
                        'Tu archivo imaginario está seguro :)',
                        'error'
                    )
                }
            })
        })
    </script>
@endsection
