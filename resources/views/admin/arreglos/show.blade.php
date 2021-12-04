@extends('layouts._admin')
@section('title','Detalles arreglo')
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('arreglos.index')}}">Arreglos</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Detalle de arreglo</h3>
    </div>
	<div class="card-body ">
        <div class="row">
            <div class="col-lg-8">
              <h1 class="mt-4">Arreglo</h1>
              {{-- <h1 class="mt-4">{{$arreglo->name}}</h1> --}}
              <hr>
              <p>Generado el {{$arreglo->created_at->format('d/m/y')}}</p>
              <hr>
              <p>Valor a cancelar: {{$arreglo->ValorArreglo}}</p>
              <hr>
              <img class="img-fluid rounded" src="{{$arreglo->image->url}}" alt="">
              <hr>
              <p>
                {!!htmlspecialchars_decode($arreglo->DescripcionArreglo)!!}
              </p>

              <hr>
            </div>
            <div class="col-md-4">
              <div class="card my-4">
                <h5 class="card-header">Entrega a:</h5>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-8">
                      <ul class="list-unstyled mb-0">
                        <li>
                            <h5>Nombre contacto:</h5> {{$arreglo->NombreReclama}} <br>
                        </li>
                        <li>
                            <h5>Telefono: </h5>{{$arreglo->TelefonoReclama}}
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
	<div class="card-footer">
      <a class="btn btn-primary" href="{{route('home')}}">Regresar</a>
    </div>
  </div>
@endsection
