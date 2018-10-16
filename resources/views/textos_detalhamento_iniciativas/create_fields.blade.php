<!-- Descritivo Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descritivo', 'Descritivo:') !!}
    {!! Form::text('descritivo', null, ['class' => 'form-control']) !!}
</div>

<!-- Descritivo Iniciativa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('texto_iniciativa_id', 'Descritivo Iniciativa:') !!}
    {!! Form::select('texto_iniciativa_id', $textosIniciativa->pluck('descritivo', 'id')->unique(), null, ['class' => 'form-control']) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('textosDetalhamentoIniciativas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
