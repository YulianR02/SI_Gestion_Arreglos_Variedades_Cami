@extends('layouts._admin')
@section('title', 'Gestión de Categorias')
@section('breadcrumb')
    <li class="breadcrumb-item">@yield('title')</li>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">Sección de categorías</h2>
                </div>
                <div class="card-tools">
                    <ul class="nav nav-tabs">
                        @foreach (getModulesArray() as $module => $item)
                            <li class="nav-item">
                                <a class="nav-link "
                                    href="{{ route('categories.module', $module) }}">{{ $item }}</a>
                            </li>
                        @endforeach
                    </ul>

                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('categories.create') }}"><i
                                    class="fas fa-plus"></i> Agregar</a>
                        </li>
                    </ul>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
                            <thead>
                                <tr style="text-align: center">
                                    <th class="wd-15p"><strong>Nombre</strong></th>
                                    <th class="wd-15p">Editar</th>
                                    <th class="wd-15p">Eliminar</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($categories as $category)
                                    <tr class="table-Light" style="text-align: center">

                                        <!--<th  >$rol->NombreRol}}</th>-->

                                        <th>{{ $category->name }}</th>
                                        <th>
                                            <a class="btn btn-info"
                                                href="{{ route('categories.edit', $category->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </th>
                                        <th>
                                            {{-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteCategories{{ $category->id }}">
                                                <i class="zmdi zmdi-delete zmdi-hc-lg" title="Eliminar categoria"></i>
                                            </button> --}}
                                            {{-- {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE'], ['class' => 'deleteCategories']) !!}
                                            <button class="btn btn-danger deleteCategories">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                            {!! Form::close() !!} --}}
                                            <form action="{{ route('categories.destroy', $category->id) }}"
                                                class="deleteCategories" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>

                                        </th>
                                    </tr>
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
                'La categoria ha sido eliminada.',
                'success'

            )
        </script>
    @endif

    <script>
        $('.deleteCategories').submit(function(e) {
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
