@extends('layouts.admin')
@section('title','Gestión de usuarios')
    @section('breadcrumb')
    <li class="breadcrumb-item">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Sección de usuarios</h3>
	  <div class="card-tools">
            <a type="button" class="btn btn-tool" href="{{route('users.create')}}">
                <h3 class="card-title"><i class="fas fa-plus"></i> Agregar   </h3>
            </a>
		<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
		  <i class="fas fa-minus"></i></button>
	  </div>
	</div>
	<div class="card-body table-responsive p-0" style="height: 300px;">
        {{--<ul class="nav nav-tabs">
			@foreach (getModulesArray() as $module => $item)
			<li class="nav-item">
				<a class="nav-link " href="{{route('categories.module', $module)}}">{{$item}}</a>
			</li>
			@endforeach
		</ul>--}}

	  <table class="table table-head-fixed">
		  <thead>
			  <tr>
				  <th scope="col">ID</th>
				  <th>Nombre</th>
                  <th>Email</th>
                  <th>Fecha Registro</th>
                  <th colspan="3">&nbsp;</th>
			  </tr>
		  </thead>
		  <tbody>
			  @foreach ($users as $user)
			<tr>
				  <td scope="row">{{$user->id}}</td>
				  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->created_at}}</td>

                  <td width="10px">
					<a class="btn btn-info" href="{{route('users.show', $user->id)}}">
                        <i class="fas fa-eye"></i>
                    </a>
				</td>  <td width="10px">
					<a class="btn btn-info" href="{{route('users.edit', $user->id)}}">
                        <i class="fas fa-edit"></i>
                    </a>
				</td>
				<td width="10px">
					{!! Form::open(['route'=>['users.destroy',$user->id], 'method'=>'DELETE']) !!}
					<button class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i>
                    </button>
					{!! Form::close() !!}
				</td>
			</tr>
			  @endforeach
		  </tbody>
	  </table>
	{{$users->render()}}
	</div>
	<div class="card-footer">
	  Footer
    </div>
  </div>
@endsection
