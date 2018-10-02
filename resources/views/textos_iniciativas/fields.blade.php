<!-- Descritivo Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descritivo', 'Descritivo:') !!}
    {!! Form::select('descritivo', $textosIniciativa->groupBy('descritivo')->pluck('descritivo', 'descritivo'), $textosIniciativa->descritivo, ['class' => 'form-control']) !!}
</div>

<!-- Descritivo Pai Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descritivo_pai', 'Descritivo Pai:') !!}
    {!! Form::select('descritivo_pai', $textosIniciativa->groupBy('descritivo_pai')->pluck('descritivo_pai', 'descritivo_pai'), $textosIniciativa->descritivo_pai, ['class' => 'form-control']) !!}
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', 'Numero:') !!}
    {!! Form::number('numero', null, ['class' => 'form-control']) !!}
</div>

<!-- Prioridade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prioridade', 'Prioridade:') !!}
    {!! Form::number('prioridade', null, ['class' => 'form-control']) !!}
</div>

<!-- Descritivo Cubo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('textos_cubos_id', 'Descritivo Cubo:') !!}
    {!! Form::select('textos_cubos_id', $textosCubo->pluck('descritivo', 'id'), $textosIniciativa->textos_cubos_id, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('textosIniciativas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
