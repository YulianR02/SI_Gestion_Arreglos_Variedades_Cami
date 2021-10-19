@extends('layouts._admin')
@section('title','Gestión de SubCategorias')
    @section('breadcrumb')
    <li class="breadcrumb-item">@yield('title')</li>
@endsection
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h2 class="mb-0">Sección de subcategorias</h2>
            </div>
            <div class="card-tools">
                <a type="button" class="btn btn-tool" href="{{ route('subcategories.create') }}">
                    <h3 class="card-title"><i class="fas fa-plus"></i> Agregar </h3>
                </a>

            </div>
            <div class="dropdown-divider"></div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
                        <thead>
                            <tr style="text-align: center">
                                <th class="wd-15p"><strong>ID</strong></th>
                                <th class="wd-15p"><strong>Nombre</strong></th>
                                <th class="wd-15p">Editar</th>
                                <th class="wd-15p">Eliminar</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($subcategories as $subcategory)
                                {{-- @if ($subcategory->id == 1 || $subcategory->estado == 2) --}}
                                <tr class="table-Light" style="text-align: center">

                                    <!--<th  >$rol->NombreRol}}</th>-->

                                    <th>{{ $subcategory->id }}</th>
                                    <th>{{ $subcategory->name }}</th>
                                    <th >
                                        <a class="btn btn-info" href="{{ route('subcategories.edit', $subcategory->id) }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </th>
                                    <th >
                                        {!! Form::open(['route' => ['subcategories.destroy', $subcategory->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                        {!! Form::close() !!}
                                    </th>

                                    {{-- <th><a href="{{url('subcategory/'.$subcategory->idUsuario) }}">{{$subcategory->email}}</a></th>

                                <td><a href="{{url('subcategory/'.$subcategory->idUsuario.'/edit') }}" type="button" class="btn btn-success"><i class="icon ion-md-create"></i></a></td> --}}

                                    {{-- <td>
                                    @switch ($subcategory->estado)
                                        @case(null)
                                            <strong class="alert-info">Usuario sin estado
                                                <a href="{{ url('subcategory/'.$subcategory->idUsuario .'/estado') }}">
                                                    Asignar estado
                                                </a>
                                            </strong>
                                        @break
                                        @case(1)
                                            <a href="{{ url('subcategory/'.$subcategory->idUsuario .'/estado') }}" type="button" class="btn btn-danger"><i class="icon ion-md-trash"></i> </a>
                                        @break

                                        @case(2)
                                            <a href="{{ url('subcategory/'.$subcategory->idUsuario .'/estado') }}"type="button" class="btn btn-success"><i class="icon ion-md-checkmark"></i>
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
