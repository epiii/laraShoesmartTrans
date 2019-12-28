<!-- Merk Field -->
<div class="form-group">
    {!! Form::label('merk', 'Merk:') !!}
    <p>{{ $products->merk }}</p>
</div>

<!-- Harga Field -->
<div class="form-group">
    {!! Form::label('harga', 'Harga:') !!}
    <p>{{ $products->harga }}</p>
</div>

<!-- Stok Field -->
<div class="form-group">
    {!! Form::label('stok', 'Stok:') !!}
    <p>{{ $products->stok }}</p>
</div>

<!-- Gbr Product Field -->
<div class="form-group">
    {!! Form::label('gbr_product', 'Gbr Product:') !!}
    <p>{{ $products->gbr_product }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $products->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $products->updated_at }}</p>
</div>

