@extends('layouts.admin')
@section('title','Crear arreglo')
    @section('breadcrumb')
    <li class="breadcrumb-item active">
        <a href="{{route('arreglos.index')}}">Arreglos</a>
    </li>
    <li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Registro de arreglo</h3>
    </div>
    {!! Form::open(['route'=>'arreglos.store', 'method'=>'POST','files' => true]) !!}
	<div class="card-body ">
        @include('admin.arreglos.form.form')
	</div>
	<!-- /.card-body -->
	<div class="card-footer">
      <a class="btn btn-danger float-right" href="{{route('arreglos.index')}}">Cancelar</a>
      <input type="submit" value="Guardar" class="btn btn-primary">
    </div>
    {!! Form::close() !!}
</div>


@endsection
