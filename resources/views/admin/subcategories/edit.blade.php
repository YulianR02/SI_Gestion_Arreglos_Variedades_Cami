@extends('layouts._admin')
@section('title', 'Editar SubCategoría')
@section('breadcrumb')
    <li class="breadcrumb-item active">
        <a href="{{ route('categories.index') }}">SubCategorías</a>
    </li>
    <li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edición de Subcategoría</h3>
            <strong class="form-text text-muted">
                Campos marcados con (*) obligatorios, diligenciarlos por favor.
            </strong>
        </div>
        {!! Form::model($subcategory, ['route' => ['subcategories.update', $subcategory->id], 'method' => 'PUT', 'files' => true]) !!}
        <div class="card-body ">
            @include('admin.subcategories.form.form')
        </div>
        <div class="card-footer">
            <a class="btn btn-danger float-right" href="{{ route('subcategories.index') }}">Cancelar</a>
            <input type="submit" value="Actualizar" class="btn btn-primary">
        </div>
        {!! Form::close() !!}
    </div>
@endsection
