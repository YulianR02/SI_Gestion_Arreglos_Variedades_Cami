@extends('layouts._admin')
@section('title', 'Generar apartado')
@section('breadcrumb')
    <li class="breadcrumb-item active">
        <a href="{{ route('products.index') }}">Productos</a>
    </li>
    <li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Registro de apartado</h3>
            <strong class="form-text text-muted">
                Campos marcados con (*) obligatorios, diligenciarlos por favor.
            </strong>
        </div>
        {!! Form::open(['route' => 'apartados.store', 'method' => 'POST', 'files' => true]) !!}
        <div class="card-body ">
            @include('admin.products.apartados.form.form')
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <a class="btn btn-danger float-right" href="{{ route('products.index') }}">Cancelar</a>
            <input type="submit" value="Guardar" class="btn btn-primary">
        </div>
        {!! Form::close() !!}
    </div>


@endsection