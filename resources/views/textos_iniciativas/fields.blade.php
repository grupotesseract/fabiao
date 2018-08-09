<!-- Descritivo Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descritivo', 'Descritivo:') !!}
    {!! Form::textarea('descritivo', null, ['class' => 'form-control']) !!}
</div>

<!-- Descritivo Pai Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descritivo_pai', 'Descritivo Pai:') !!}
    {!! Form::textarea('descritivo_pai', null, ['class' => 'form-control']) !!}
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

<!-- Textos Cubos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('textos_cubos_id', 'Textos Cubos Id:') !!}
    {!! Form::text('textos_cubos_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Path Pdf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('path_pdf', 'Path Pdf:') !!}
    {!! Form::text('path_pdf', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('textosIniciativas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
