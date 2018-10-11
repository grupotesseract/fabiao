<!-- Descritivo Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descritivo', 'Descritivo:') !!}
    {!! Form::select('descritivo', $textosDetalhamentoIniciativa->groupBy('descritivo')->pluck('descritivo', 'descritivo'), $textosDetalhamentoIniciativa->descritivo, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('textosDetalhamentoIniciativas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
