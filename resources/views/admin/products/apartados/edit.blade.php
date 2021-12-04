@extends('layouts._admin')
@section('title','Editar apartado')
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('apartados.index')}}">Apartado de Productos</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Edición de apartado</h3>
      <strong class="form-text text-muted">
        Campos marcados con (*) obligatorios, diligenciarlos por favor.
    </strong>
    </div>
    {!! Form::model($apartado, ['route'=>['apartados.update',$apartado->id],'method'=>'PUT','files' => true]) !!}
	<div class="card-body ">
        @include('admin.products.apartados.form.forme')
    </div>
	<div class="card-footer">
      <a class="btn btn-danger float-right" href="{{route('apartados.index')}}">Cancelar</a>
      <input type="submit" value="Actualizar" class="btn btn-primary">
    </div>
    {!! Form::close() !!}
</div>
@endsection
