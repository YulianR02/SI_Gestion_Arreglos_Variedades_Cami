@extends('layouts._admin')
@section('title', 'Editar perfil')
@section('breadcrumb')
    <li class="breadcrumb-item active">
        <a href="{{ route('users.profile.index') }}">Mi perfil</a>
    </li>
    <li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edición de perfil</h3>
            <strong class="form-text text-muted">
                Campos marcados con (*) obligatorios, diligenciarlos por favor.
            </strong>
        </div>

        {!! Form::model($user, ['route' => ['users.profile.update', Auth::user()->id], 'method' => 'PUT', 'files' => true]) !!}
        <div class="card-body ">
            <div class="form-group">
                {!! Form::label('name', 'Nombre de Usuario *') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'autofocus']) !!}
                @error('name')
                    <div class="alert alert-warning">{{ $message }}</div>
                @enderror
            </div>

        </div>
        <div class="card-footer">
            <a class="btn btn-danger float-right" href="{{ route('users.profile.index') }}">Cancelar</a>
            <input type="submit" value="Actualizar" class="btn btn-primary">
        </div>
        {!! Form::close() !!}
    </div>
@endsection
