<div class="form-group">
    {!! Form::label('name','Nombre') !!}
    {!! Form::text('name', null,['class'=>'form-control','autofocus']) !!}
    @error('name')
        <div class="alert alert-warning">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('category_id','Nombre Categoria') !!}
    {!! Form::select('category_id',$categories, null,['class'=>'form-control']) !!}
</div>
