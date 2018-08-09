<!-- Texto Pergunta Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('texto_pergunta', 'Texto Pergunta:') !!}
    {!! Form::textarea('texto_pergunta', null, ['class' => 'form-control']) !!}
</div>

<!-- Texto Resposta 1 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('texto_resposta_1', 'Texto Resposta 1:') !!}
    {!! Form::textarea('texto_resposta_1', null, ['class' => 'form-control']) !!}
</div>

<!-- Texto Resposta 2 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('texto_resposta_2', 'Texto Resposta 2:') !!}
    {!! Form::textarea('texto_resposta_2', null, ['class' => 'form-control']) !!}
</div>

<!-- Descritivo Resposta 1 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descritivo_resposta_1', 'Descritivo Resposta 1:') !!}
    {!! Form::textarea('descritivo_resposta_1', null, ['class' => 'form-control']) !!}
</div>

<!-- Descritivo Resposta 2 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descritivo_resposta_2', 'Descritivo Resposta 2:') !!}
    {!! Form::textarea('descritivo_resposta_2', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('textoPosicaoFinanceiras.index') !!}" class="btn btn-default">Cancelar</a>
</div>
