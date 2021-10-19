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
                                <a class="nav-link " href="{{ route('categories.module', $module) }}">{{ $item }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <a type="button" class="btn btn-tool" href="{{ route('categories.create') }}">
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
                                @foreach ($categories as $category)
                                    <tr class="table-Light" style="text-align: center">

                                        <!--<th  >$rol->NombreRol}}</th>-->

                                        <th>{{ $category->id }}</th>
                                        <th>{{ $category->name }}</th>
                                        <th >
                                            <a class="btn btn-info" href="{{ route('categories.edit', $category->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </th>
                                        <th >
                                            {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                            {!! Form::close() !!}
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
