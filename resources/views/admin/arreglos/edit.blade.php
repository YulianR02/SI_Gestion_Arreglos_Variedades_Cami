@extends('layouts._admin')
@section('title','Editar publicación')
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('arreglos.index')}}">Arreglos</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Edición de arreglo</h3>
    </div>
    {!! Form::model($arreglo, ['route'=>['arreglos.update',$arreglo->id],'method'=>'PUT','files' => true]) !!}
	<div class="card-body ">
    @include('admin.arreglos.form.form')
    <div class="card bg-dark text-white">
      <img class="card-img" src="{{$arreglo->image->url}}" alt="Card image">
      <div class="card-img-overlay">
        <h5 class="card-title">Imagen de arreglo</h5>
      </div>
    </div>
	</div>
	<div class="card-footer">
      <a class="btn btn-danger float-right" href="{{route('arreglos.index')}}">Cancelar</a>
      <input type="submit" value="Actualizar" class="btn btn-primary">
    </div>
    {!! Form::close() !!}
  </div>
@endsection
