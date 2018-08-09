<!-- Cabecalho Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cabecalho', 'Cabecalho:') !!}
    {!! Form::text('cabecalho', null, ['class' => 'form-control']) !!}
</div>

<!-- Rodape Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rodape', 'Rodape:') !!}
    {!! Form::text('rodape', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('textoEntradas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
