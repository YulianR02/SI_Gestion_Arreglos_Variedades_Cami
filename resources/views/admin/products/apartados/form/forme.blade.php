<div class="form-group">
    {!! Form::label('product_id', 'Producto a apartar *') !!}
    {!! Form::select('product_id', $products, null, ['class' => 'form-control']) !!}
    @error('product_id')
        <div class="alert alert-warning">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
        {!! Form::label('cantidadProducto', 'Cantidad a apartar *') !!}
        {!! Form::number('cantidadProducto', null, ['class' => 'form-control']) !!}
        @error('cantidadProducto')
            <div class="alert alert-warning">{{ $message }}</div>
        @enderror
</div>
<div class="form-group">
    {!! Form::label('estadoApartado', 'Estado del apartado: *') !!}
    <br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="estadoApartado" id="rdEstatus1" value="ACTIVO" checked>
        <label class="form-check-label" for="estadoApartado">Activo</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="estadoApartado" id="rdEstatus0" value="CANCELADO" >
        <label class="form-check-label" for="estadoApartado">Cancelado</label>
    </div>
    @error('estadoApartado')
        <div class="alert alert-warning">{{ $message }}</div>
    @enderror
</div>
