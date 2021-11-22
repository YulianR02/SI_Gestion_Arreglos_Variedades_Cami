<div class="form-group">
    <div class="form-group col">
        {!! Form::label('user_id', 'Clientes') !!}
        {!! Form::select('user_id', $usuarios, null, ['class' => 'form-control']) !!}
        @error('user_id')
            <div class="alert alert-warning">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col">
        {!! Form::label('Imagen') !!}
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="image" lang="es">
            <label class="custom-file-label" name="image">Seleccionar Archivo</label>
        </div>
        @error('image')
            <div class="alert alert-warning">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col">
        {!! Form::label('DescripcionArreglo', 'Descripcion') !!}
        {!! Form::textarea('DescripcionArreglo', null, ['class' => 'form-control', 'rows' => '3']) !!}
        @error('DescripcionArreglo')
            <div class="alert alert-warning">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group col">
        {!! Form::label('ValorArreglo', 'Valor del Arreglo') !!}
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend">$</span>
            </div>
            {!! Form::text('ValorArreglo', null, ['class' => 'form-control', 'placeholder' => 'Valor del Arreglo']) !!}

        </div>

        @error('ValorArreglo')
            <div class="alert alert-warning">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col">
        {!! Form::label('FechaEntrega', 'Fecha de Entrega') !!}
        <div class="input-group">
            {!! Form::date('FechaEntrega', null, ['class' => 'form-control']) !!}
        </div>
        @error('FechaEntrega')
            <div class="alert alert-warning">{{ $message }}</div>
        @enderror

    </div>
    <div class="form-group col">
        {!! Form::label('Estado', 'Estado del Arreglo ') !!}
        <div class="form-check">
            <input class="form-check-input" type="radio" name="EstadoArreglo" id="exampleRadios1" value="Terminado">
            <label class="form-check-label" for="exampleRadios1">
                Terminado
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="EstadoArreglo" id="exampleRadios2" value="En Proceso"
                checked>
            <label class="form-check-label" for="exampleRadios2">
                En proceso
            </label>
        </div>
        @error('FechaEntrega')
            <div class="alert alert-warning">{{ $message }}</div>
        @enderror

    </div>
    <div class="form-group col">
        {!! Form::label('NombreReclama', 'Nombre de quien reclama') !!}
        <div class="input-group">
            {!! Form::text('NombreReclama', null, ['class' => 'form-control', 'placeholder' => 'Nombre de persona que reclama']) !!}
            </>
        </div>
        @error('NombreReclama')
            <div class="alert alert-warning">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col">
        <div class="form-group">
            {!! Form::label('TelefonoReclama', 'Telefono de quien reclama') !!}
            <div class="input-group">
                {!! Form::text('TelefonoReclama', null, ['class' => 'form-control', 'placeholder' => 'Telefono de persona que reclama']) !!}
                </>
            </div>
            @error('TelefonoReclama')
                <div class="alert alert-warning">{{ $message }}</div>
            @enderror

        </div>
    </div>
    @section('scripts')
        {!! Html::script('vendor/ckeditor/ckeditor.js') !!}
        <script>
            CKEDITOR.replace('body');
        </script>
    @endsection
