@extends('layouts.admin')
@section('title', 'Gestión de usuarios')
@section('breadcrumb')
<li class="breadcrumb-item">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sección de usuarios</h3>
        <div class="card-tools">
            <a type="button" class="btn btn-tool" href="{{ route('users.create') }}">
                <h3 class="card-title"><i class="fas fa-plus"></i> Agregar </h3>
            </a>
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fas fa-minus"></i></button>
        </div>
    </div>
    <div class="card-body table-responsive p-0" style="height: 300px;">
        {{-- <ul class="nav nav-tabs">
        @foreach (getModulesArray() as $module => $item)
        <li class="nav-item">
            <a class="nav-link " href="{{route('categories.module', $module)}}">{{$item}}</a>
        </li>
        @endforeach
    </ul> --}}

        <table class="table table-head-fixed">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th>Nombre</th>
                    <th>Correo Electronico</th>
                    <th colspan="3">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td scope="row">{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>

                        {{-- <td width="10px">
                            <a class="btn btn-info" href="{{ route('users.show', $user->id) }}">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td> --}}
                        {{-- <td width="10px">
                            <a class="btn btn-info" href="{{ route('users.edit', $user->id) }}">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td> --}}
                        <td width="10px">
                            {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) !!}
                            <button class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->render() }}
    </div>
    <div class="card-footer">
        Footer
    </div>
</div>

  {{-- <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">


      <div class="card card-solid">
        
        <div class="card-body pb-0">
            
          <div class="row d-flex align-items-stretch">
            @foreach ($users as $user )
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  Digital Strategist
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>{{$user->name}}</b></h2>
                      <p class="text-muted text-sm"><b>Email:</b>{{$user->email}}</p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../../dist/img/user1-128x128.jpg" alt="" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> View Profile
                    </a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          
        </div>
        
        <!-- /.card-body -->
        <div class="card-footer">
          <nav aria-label="Contacts Page Navigation">
            <ul class="pagination justify-content-center m-0">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#">6</a></li>
              <li class="page-item"><a class="page-link" href="#">7</a></li>
              <li class="page-item"><a class="page-link" href="#">8</a></li>
            </ul>
          </nav>
        </div>
        <!-- /.card-footer -->
        
      </div>
      <!-- /.card -->
     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> --}}

@endsection
