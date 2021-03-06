@extends('layouts._admin')
@section('title', 'Gestión de usuarios')
@section('breadcrumb')
    <li class="breadcrumb-item">@yield('title')</li>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">Sección de clientes</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
                            <thead>
                                <tr style="text-align: center">
                                    <th class="wd-15p"><strong>ID</strong></th>
                                    <th class="wd-15p"><strong>Nombre</strong></th>
                                    <th class="wd-15p"><strong>Correo Electronico</strong></th>
                                    <th class="wd-15p"><strong>Fecha de Registro</strong></th>
                                    <th class="wd-15p"><strong>Editar</strong></th>
                                    <th class="wd-15p"><strong>Eliminar</strong></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ( $users as $user )
                                {{-- @if($user->id==1 || $user->estado==2) --}}
                                    <tr class="table-Light" style="text-align: center">

                                        <!--<th  >$rol->NombreRol}}</th>-->

                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->created_at}}</td>
                                        <td width="10px">
                                            <a class="btn btn-info" href="{{ route('users.edit', $user->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                        <td width="10px">
                                            <form action="{{ route('users.destroy', $user->id) }}"
                                                class="deleteUser" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>



                                        </td>


                                        {{-- <th><a href="{{url('user/'.$user->idUsuario) }}">{{$user->email}}</a></th>

                                        <td><a href="{{url('user/'.$user->idUsuario.'/edit') }}" type="button" class="btn btn-success"><i class="icon ion-md-create"></i></a></td> --}}

                                        {{-- <td>
                                            @switch ($user->estado)
                                                @case(null)
                                                    <strong class="alert-info">Usuario sin estado
                                                        <a href="{{ url('user/'.$user->idUsuario .'/estado') }}">
                                                            Asignar estado
                                                        </a>
                                                    </strong>
                                                @break
                                                @case(1)
                                                    <a href="{{ url('user/'.$user->idUsuario .'/estado') }}" type="button" class="btn btn-danger"><i class="icon ion-md-trash"></i> </a>
                                                @break

                                                @case(2)
                                                    <a href="{{ url('user/'.$user->idUsuario .'/estado') }}"type="button" class="btn btn-success"><i class="icon ion-md-checkmark"></i>
                                                    </a>
                                                @break
                                            @endswitch
                                        </td> --}}
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
                'El Usuario ha sido inactivado.',
                'success'

            )
        </script>
    @endif

    <script>
        $('.deleteUser').submit(function(e) {
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
                        'Tu acción imaginaria está segura :)',
                        'error'
                    )
                }
            })
        })
    </script>
@endsection

