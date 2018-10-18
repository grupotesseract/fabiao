<!-- Descritivo Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descritivo', 'Descritivo:') !!}
    {!! Form::text('descritivo', null, ['class' => 'form-control']) !!}
</div>

<!-- Resposta Ec Field -->
<div class="form-group col-sm-4 col-lg-4">
    {!! Form::label('resposta_ec', 'Resposta Ec:') !!}
    {!! Form::select('resposta_ec', ['Maior' => 'Maior', 'Menor' => 'Menor'], null, ['class' => 'form-control']) !!}
</div>

<!-- Resposta Pe Field -->
<div class="form-group col-sm-4 col-lg-4">
    {!! Form::label('resposta_pe', 'Resposta Pe:') !!}
    {!! Form::select('resposta_pe', ['Forte' => 'Forte', 'Fraco' => 'Fraco'], null, ['class' => 'form-control']) !!}
</div>

<!-- Resposta Pf Field -->
<div class="form-group col-sm-4 col-lg-4">
    {!! Form::label('resposta_pf', 'Resposta Pf:') !!}
    {!! Form::select('resposta_pf', ['Forte' => 'Forte', 'Fraca' => 'Fraca'], null, ['class' => 'form-control']) !!}
</div>

<!-- Path Pdf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('path_pdf', 'Arquivo PDF:') !!}
    {!! Form::file('path_pdf', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Compra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_compra', 'Valor Compra:') !!}
    {!! Form::number('valor_compra', null, ['class' => 'form-control', 'step' => 'any']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('textosCubos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
