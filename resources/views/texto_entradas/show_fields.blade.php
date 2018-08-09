<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $textoEntrada->id !!}</p>
</div>

<!-- Cabecalho Field -->
<div class="form-group">
    {!! Form::label('cabecalho', 'Cabecalho:') !!}
    <p>{!! $textoEntrada->cabecalho !!}</p>
</div>

<!-- Rodape Field -->
<div class="form-group">
    {!! Form::label('rodape', 'Rodape:') !!}
    <p>{!! $textoEntrada->rodape !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $textoEntrada->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $textoEntrada->updated_at !!}</p>
</div>

