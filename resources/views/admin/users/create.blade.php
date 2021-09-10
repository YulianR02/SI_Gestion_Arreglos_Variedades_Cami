@extends('layouts.admin')
@section('title','Crear usuario')
    @section('breadcrumb')
    <li class="breadcrumb-item active">
        <a href="{{route('users.index')}}">Usuarios</a>
    </li>
    <li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Registro de usuario</h3>
    </div>
    {!! Form::open(['route'=>'users.store', 'method'=>'POST','files' => true]) !!}
	<div class="card-body ">
        @include('admin.users.form.form')
	</div>
	<!-- /.card-body -->
	<div class="card-footer">
      <a class="btn btn-danger float-right" href="{{route('users.index')}}">Cancelar</a>
      <input type="submit" value="Guardar" class="btn btn-primary">
    </div>
    {!! Form::close() !!}
</div>


@endsection

