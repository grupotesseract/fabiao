<!-- Descritivo Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descritivo', 'Descritivo:') !!}
    {!! Form::textarea('descritivo', null, ['class' => 'form-control']) !!}
</div>

<!-- Iniciativa Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('texto_iniciativa_id', 'Iniciativa Id:') !!}
    {!! Form::text('texto_iniciativa_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('textosDetalhamentoIniciativas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
