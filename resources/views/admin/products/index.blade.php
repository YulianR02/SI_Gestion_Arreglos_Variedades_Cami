@extends('layouts.admin')
@section('title','Gestión de productos')
    @section('breadcrumb')
    <li class="breadcrumb-item">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Sección de productos</h3>
	  <div class="card-tools">
            <a type="button" class="btn btn-tool" href="{{route('products.create')}}">
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
                  <th>Estado</th>
                  <th colspan="3">&nbsp;</th>
			  </tr>
		  </thead>
		  <tbody>
			  @foreach ($products as $product)
			<tr>
				  <td scope="row">{{$product->id}}</td>
				  <td>{{$product->name}}</td>
                  <td>{{$product->status}}</td>

                  <td width="10px">
					<a class="btn btn-info" href="{{route('products.show', $product->id)}}">
                        <i class="fas fa-eye"></i>
                    </a>
				</td>  <td width="10px">
					<a class="btn btn-info" href="{{route('products.edit', $product->id)}}">
                        <i class="fas fa-edit"></i>
                    </a>
				</td>
				<td width="10px">
					{!! Form::open(['route'=>['products.destroy',$product->id], 'method'=>'DELETE']) !!}
					<button class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i>
                    </button>
					{!! Form::close() !!}
				</td>
			</tr>
			  @endforeach
		  </tbody>
	  </table>
	{{$products->render()}}
	</div>
	<div class="card-footer">
	  Footer
    </div>
  </div>
@endsection
