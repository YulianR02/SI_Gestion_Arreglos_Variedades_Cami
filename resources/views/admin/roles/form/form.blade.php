<div class="form-group">
    {!! Form::label('name', 'Nombre *') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'autofocus', 'placeholder' =>'Ingrese el nombre del rol']) !!}
    @error('name')
        <div class="alert alert-warning">{{ $message }}</div>
    @enderror
</div>
<h2 class="h3">Lista de permisos</h2>
@foreach ($permissions as $permission)
    <div>
        <label >
            {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
            {{$permission->description}}
        </label>
    </div>
@endforeach
