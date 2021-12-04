@extends('layouts._admin')
@section('title', 'Apartado de productos')
@section('breadcrumb')
    <li class="breadcrumb-item">@yield('title')</li>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">Apartado de productos</h2>
                </div>
                <div class="card-tools">
                    @can('apartados.create')
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('apartados.create') }}">
                                    <i class="fas fa-plus"></i> Agregar</a>
                            </li>
                        </ul>
                    @endcan

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
                            <thead>
                                <tr style="text-align: center">
                                    <th class="wd-15p"><strong>Cliente</strong></th>
                                    <th class="wd-15p"><strong>Producto</strong></th>
                                    <th class="wd-15p"><strong>Cantidad</strong></th>
                                    <th class="wd-15p"><strong>Estado</strong></th>
                                    {{-- @can('apartados.edit') --}}
                                    <th class="wd-15p">Editar</th>
                                    {{-- @endcan
                                    @can('apartados.destroy') --}}
                                    <th class="wd-15p">Eliminar</th>
                                    {{-- @endcan --}}
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($apartados as $apartado)
                                    {{-- @if ($apartado->id == 1 || $apartado->estado == 2) --}}
                                    <tr class="table-Light" style="text-align: center">
                                        <th>{{$apartado->user->name}}</th>
                                        <th>{{$apartado->product->name}}</th>
                                        <th>{{$apartado->cantidadProducto}}</th>
                                        @if ($apartado->estadoApartado == 'ACTIVO')
                                            <th class="table-success">{{$apartado->estadoApartado}}</th>
                                        @elseif ($apartado->estadoApartado == 'CANCELADO')
                                            <th class="table-danger">{{$apartado->estadoApartado}}</th>
                                        @endif
                                        @can('apartados.edit')
                                        <th>
                                            <a class="btn btn-info" href="{{ route('apartados.edit', $apartado->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </th>
                                        @endcan
                                        @can('apartados.destroy')
                                        <th>
                                            <form action="{{ route('apartados.destroy', $apartado->id) }}"
                                                class="deleteApartados" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </th>
                                        @endcan
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
                'El producto ha sido eliminado.',
                'success'

            )
        </script>
    @endif

    <script>
        $('.deleteApartados').submit(function(e) {
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
