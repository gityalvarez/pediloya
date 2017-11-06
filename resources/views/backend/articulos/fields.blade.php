<!-- Stock Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stock', 'Stock:') !!}
    {!! Form::number('stock', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio', 'Precio:') !!}
    {!! Form::number('precio', null, ['class' => 'form-control']) !!}
</div>

<!-- Producto Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('producto_id', 'Producto Id:') !!}  </p>
    {!! Form::select('producto_id',$productos->pluck('nombre','id'),  ['class' => 'form-control']) !!}
   
</div>

<!-- Comercio Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comercio_id', 'Comercio Id:') !!}</p>
    {!! Form::select('comercio_id', $comercios->pluck('nombre','id'), ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.articulos.index') !!}" class="btn btn-default">Cancel</a>
</div>
