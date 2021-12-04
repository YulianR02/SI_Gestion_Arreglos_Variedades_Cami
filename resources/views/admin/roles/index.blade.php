@extends('layouts._admin')
@section('title', 'Gestión de roles')
@section('breadcrumb')
    <li class="breadcrumb-item">@yield('title')</li>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">Sección de roles</h2>
                </div>
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('roles.create') }}"><i class="fas fa-plus"></i>
                            Agregar</a>
                    </li>
                </ul>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
                            <thead>
                                <tr style="text-align: center">
                                    <th class="wd-15p"><strong>ID</strong></th>
                                    <th class="wd-15p"><strong>Rol</strong></th>
                                    <th class="wd-15p"><strong>Editar</strong></th>
                                    <th class="wd-15p"><strong>Eliminar</strong></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($roles as $role)
                                    {{-- @if ($user->id == 1 || $user->estado == 2) --}}
                                    <tr class="table-Light" style="text-align: center">
                                        <td>{{ $role->id }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td width="10px">
                                            <a class="btn btn-info" href="{{ route('roles.edit', $role) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                        <td width="10px">
                                            <form action="{{ route('roles.destroy', $role->id) }}"
                                                class="deleteRole" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>



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
        $('.deleteRole').submit(function(e) {
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
