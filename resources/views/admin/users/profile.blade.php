@extends('layouts._admin')
@section('title', 'Mi Perfil')
@section('breadcrumb')
    <li class="breadcrumb-item">@yield('title')</li>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">Mi perfil</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-profile  overflow-hidden">
                                <div class="card-body text-center cover-image" data-image-src="assets/img/profile-bg.jpg">
                                    <div class=" card-profile">
                                        <div class="row justify-content-center">
                                            <div class="">
                                                <div class="">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="mt-3 text-black">{{ Auth::user()->name }}</h3>
                                    @if (@Auth::user()->hasRole('Administrador'))
                                        <li>
                                            <p class="mb-4 text-black">ADMINISTRADOR</p>
                                        </li>
                                    @elseif(@Auth::user()->hasRole('Cliente'))
                                        <li>
                                            <p class="mb-4 text-black">CLIENTE</p>
                                        </li>
                                    @else
                                        <li>
                                            <p class="mb-4 text-black">USUARIO SIN ROL</p>
                                        </li>
                                    @endif
                                    <p class="mb-4 text-black"></p>
                                    <a href="{{ route('users.profile.edit', Auth::user()->id) }}"
                                        class="btn btn-success btn-sm"><i class="fas fa-pencil-alt" aria-hidden="true"></i>
                                        Editar perfil</a>
                                </div>
                                <div class="card-body">
                                    <div class="nav-wrapper p-0">
                                        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text"
                                            role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link mb-sm-3 mb-md-0 mt-md-2 mt-0 mt-lg-0"
                                                    id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1"
                                                    role="tab" aria-controls="tabs-icons-text-1" aria-selected="false"><i
                                                        class="fas fa-home mr-2"></i>Información</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow ">
                                <div class="card-body pb-0">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade " id="tabs-icons-text-1" role="tabpanel"
                                            aria-labelledby="tabs-icons-text-1-tab">
                                            <div class="table-responsive border ">
                                                <table class="table row table-borderless w-100 m-0 ">
                                                    <tbody class="col-lg-6 p-0">
                                                        <tr>
                                                            <td><strong>Nombre: </strong>{{ Auth::user()->name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Correo Electronico:</strong>
                                                                {{ Auth::user()->email }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <strong>Email verificado:</strong>
                                                                @if (@Auth::user()->email_verified_at != 'NULL')
                                                                    Si
                                                                @else
                                                                    No
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <strong>Fecha de verificacion de Correo Electronico: </strong>
                                                                {{ date('d-m-Y', strtotime(Auth::user()->email_verified_at )) }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <strong>Hora de verificacion de Correo Electronico: </strong>
                                                                {{ date('h:i', strtotime(Auth::user()->email_verified_at )) }}
                                                            </td>

                                                    </tbody>
                                                    <tbody class="col-lg-6 p-0">
                                                        <tr>
                                                            <td>
                                                                <strong>Rol:</strong>
                                                                @if (@Auth::user()->hasRole('Administrador'))
                                                                    ADMINISTRADOR
                                                                @elseif (@Auth::user()->hasRole('Cliente'))
                                                                    CLIENTE
                                                                @else
                                                                    EL USUARIO NO TIENE ROL ASIGNADO
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <strong>Fecha de Registro:</strong>
                                                                {{date('d-m-Y', strtotime(Auth::user()->created_at ))}}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <strong>Hora de Registro:</strong>
                                                                {{date('h:i', strtotime(Auth::user()->created_at ))}}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection
