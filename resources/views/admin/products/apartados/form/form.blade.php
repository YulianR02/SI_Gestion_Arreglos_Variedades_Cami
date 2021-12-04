{!! Form::hidden('user_id', auth()->user()->id) !!}
<div class="form-group">
    {!! Form::label('product_id', 'Producto a apartar *') !!}
    {!! Form::select('product_id', $products, null, ['class' => 'form-control']) !!}
    @error('product_id')
        <div class="alert alert-warning">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-6 mb-3">
        {!! Form::label('cantidadProducto', 'Cantidad a apartar') !!}
        {!! Form::number('cantidadProducto', null, ['class' => 'form-control']) !!}
        @error('cantidadProducto')
            <div class="alert alert-warning">{{ $message }}</div>
        @enderror
</div>
