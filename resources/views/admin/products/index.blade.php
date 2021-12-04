@extends('layouts._admin')
@section('title', 'Catalogo de productos')
@section('breadcrumb')
    <li class="breadcrumb-item">@yield('title')</li>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">Sección de productos</h2>
                </div>
                <div class="card-tools">
                    @can('products.create')
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('products.create') }}">
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
                                    <th class="wd-15p"><strong>Nombre</strong></th>
                                    <th class="wd-15p">Observar</th>
                                    @can('products.edit')
                                    <th class="wd-15p">Editar</th>
                                    @endcan
                                    @can('products.destroy')
                                    <th class="wd-15p">Eliminar</th>
                                    @endcan
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($products as $product)
                                    {{-- @if ($product->id == 1 || $product->estado == 2) --}}
                                    <tr class="table-Light" style="text-align: center">

                                        <!--<th  >$rol->NombreRol}}</th>-->
                                        <th>{{ $product->name }}</th>
                                        <th>
                                            <a class="btn btn-primary" href="{{ route('products.show', $product->id) }}">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </th>
                                        @can('products.edit')
                                        <th>
                                            <a class="btn btn-info" href="{{ route('products.edit', $product->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </th>
                                        @endcan
                                        @can('products.destroy')
                                        <th>
                                            <form action="{{ route('products.destroy', $product->id) }}"
                                                class="deleteProducts" method="POST">
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
                    {{-- <div class="row">
                        @foreach ($products as $product)
                            <div class="col-md-6 col-lg-4">
                                <div class="snip1492 card shadow">
                                    @foreach ($product->images->slice(0, 2) as $image)
                                        <img src="{{ $image->url }}" class="{{ $loop->first ? '' : 'hover-image' }}"
                                            alt="">
                                    @endforeach
                                    <div class="figcaption">
                                        <h3>{{ $product->name }}</h3>
                                        <p>{{ $product->shortDescription }}</p>
                                        <div class="price">
                                            <s>{{ $product->actualPrice }}</s>{{ $product->previousPrice }}
                                        </div>
                                    </div>
                                    <i class="ion-ios-cart"></i>
                                    <a href="cart.html"></a>
                                </div>
                            </div>
                        @endforeach
                    </div> --}}
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
        $('.deleteProducts').submit(function(e) {
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
