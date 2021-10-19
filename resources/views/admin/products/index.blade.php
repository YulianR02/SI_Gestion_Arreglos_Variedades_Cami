@extends('layouts._admin')
@section('title','Gestión de productos')
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
                <a type="button" class="btn btn-tool" href="{{ route('products.create') }}">
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
                                <th class="wd-15p"><strong>Estado</strong></th>
                                <th class="wd-15p">Observar</th>
                                <th class="wd-15p">Editar</th>
                                <th class="wd-15p">Eliminar</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($products as $product)
                                {{-- @if ($product->id == 1 || $product->estado == 2) --}}
                                <tr class="table-Light" style="text-align: center">

                                    <!--<th  >$rol->NombreRol}}</th>-->

                                    <th>{{ $product->id }}</th>
                                    <th>{{ $product->name }}</th>
                                    <th>{{ $product->status }}</th>
                                    <th>
                                        <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </th>
                                    <th >
                                        <a class="btn btn-info" href="{{ route('products.edit', $product->id) }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </th>
                                    <th >
                                        {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                        {!! Form::close() !!}
                                    </th>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
