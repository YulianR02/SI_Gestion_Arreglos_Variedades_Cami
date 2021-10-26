@extends('layouts._admin')
@section('title', 'Gestión de arreglos')
@section('breadcrumb')
    <li class="breadcrumb-item">@yield('title')</li>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">Sección de arreglos</h2>
                </div>
                <div class="card-tools">
                    <a type="button" class="btn btn-tool" href="{{ route('arreglos.create') }}">
                        <h3 class="card-title"><i class="fas fa-plus"></i> Agregar </h3>
                    </a>

                </div>
                <div class="dropdown-divider"></div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
                            <thead>
                                <tr style="text-align: center">
                                    <th class="wd-15p"><strong>Cliente</strong></th>
                                    <th class="wd-15p">Fecha Realizacion</th>
                                    <th class="wd-15p">Fecha Entrega</th>
                                    <th class="wd-15p">Estado</th>
                                    <th class="wd-15p">Observar</th>
                                    <th class="wd-15p">Editar</th>
                                    <th class="wd-15p">Eliminar</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($arreglos as $arreglo)
                                    {{-- @if ($arreglo->id == 1 || $arreglo->estado == 2) --}}
                                    <tr class="table-Light" style="text-align: center">

                                        <!--<th  >$rol->NombreRol}}</th>-->
                                        <th>{{ $arreglo->user->name }}</th>
                                        <th>{{ $arreglo->created_at }}</th>
                                        <th>{{ $arreglo->FechaEntrega }}</th>
                                        <th>{{ $arreglo->EstadoArreglo }}</th>
                                        <th>
                                            <a class="btn btn-info" href="{{ route('arreglos.show', $arreglo->id) }}">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </th>
                                        <th>
                                            <a class="btn btn-info" href="{{ route('arreglos.edit', $arreglo->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </th>
                                        <th>
                                            {!! Form::open(['route' => ['arreglos.destroy', $arreglo->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                            {!! Form::close() !!}
                                        </th>

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
