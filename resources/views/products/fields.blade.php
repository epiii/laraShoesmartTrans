<!-- Merk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('merk', 'Merk:') !!}
    {!! Form::text('merk', null, ['class' => 'form-control']) !!}
</div>

<!-- Harga Field -->
<div class="form-group col-sm-6">
    {!! Form::label('harga', 'Harga:') !!}
    {!! Form::number('harga', null, ['class' => 'form-control']) !!}
</div>

<!-- Stok Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stok', 'Stok:') !!}
    {!! Form::number('stok', null, ['class' => 'form-control']) !!}
</div>

<!-- Gbr Product Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gbr_product', 'Gbr Product:') !!}
    {!! Form::text('gbr_product', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('products.index') }}" class="btn btn-default">Cancel</a>
</div>
