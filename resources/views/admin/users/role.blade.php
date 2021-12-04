@extends('layouts._admin')
@section('title', 'Editar usuario')
@section('breadcrumb')
    <li class="breadcrumb-item active">
        <a href="{{ route('categories.index') }}">Usuarios</a>
    </li>
    <li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edición de usuarios</h3>
            <strong class="form-text text-muted">
                Campos marcados con (*) obligatorios, diligenciarlos por favor.
            </strong>
        </div>

        {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT', 'files' => true]) !!}
        <div class="card-body ">
            <p class="h5">Nombre usuario: *</p>
            <p class="form-control">{{$user->name}}</p>
            <p class="h5">Listado roles *</p>
            @foreach ($roles as $role     )

                <div>
                    <label for="rol">
                        {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                        {{$role->name}}
                    </label>
                </div>
            @endforeach
        </div>
        <div class="card-footer">
            <a class="btn btn-danger float-right" href="{{ route('users.index') }}">Cancelar</a>
            <input type="submit" value="Actualizar" class="btn btn-primary">
        </div>
        {!! Form::close() !!}
    </div>
@endsection
