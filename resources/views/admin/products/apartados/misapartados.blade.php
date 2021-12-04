@extends('layouts._admin')
@section('title', 'Mis apartados')
@section('breadcrumb')
    <li class="breadcrumb-item">@yield('title')</li>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">Mis apartados</h2>
                </div>
                <div class="card-tools">
                    @can('apartados.create')
                        <a type="button" class="btn btn-tool" href="{{ route('apartados.create') }}">
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
                                    <th class="wd-15p"><strong>Producto</strong></th>
                                    <th class="wd-15p"><strong>Cantidad</strong></th>
                                    <th class="wd-15p"><strong>Estado</strong></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($misApartados as $misApartado)
                                    <tr class="table-Light" style="text-align: center">
                                        <th>{{ $misApartado->user->name }}</th>
                                        <th>{{ $misApartado->product->name }}</th>
                                        <th>{{ $misApartado->cantidadProducto }}</th>
                                        @if ($misApartado->estadoApartado == 'ACTIVO')
                                            <th class="table-success">{{ $misApartado->estadoApartado }}</th>
                                        @elseif ($misApartado->estadoApartado == 'CANCELADO')
                                            <th class="table-danger">{{ $misApartado->estadoApartado }}</th>
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
                'El misApartado ha sido eliminado.',
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
