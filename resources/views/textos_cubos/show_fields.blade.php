<!-- Descritivo Field -->
<div class="form-group">
    {!! Form::label('descritivo', 'Descritivo:') !!}
    <p>{!! $textosCubo->descritivo !!}</p>
</div>

<!-- Resposta Ec Field -->
<div class="form-group">
    {!! Form::label('resposta_ec', 'Resposta Ec:') !!}
    <p>{!! $textosCubo->resposta_ec !!}</p>
</div>

<!-- Resposta Pe Field -->
<div class="form-group">
    {!! Form::label('resposta_pe', 'Resposta Pe:') !!}
    <p>{!! $textosCubo->resposta_pe !!}</p>
</div>

<!-- Resposta Pf Field -->
<div class="form-group">
    {!! Form::label('resposta_pf', 'Resposta Pf:') !!}
    <p>{!! $textosCubo->resposta_pf !!}</p>
</div>

<!-- Path Pdf Field -->
<div class="form-group">
    {!! Form::label('path_pdf', 'Path Pdf:') !!}
    <a href="/api/anexos/{{ $textosCubo->id }}">{!! $textosCubo->path_pdf !!}</a>
</div>

<!-- Valor Compra Field -->
<div class="form-group">
    {!! Form::label('valor_compra', 'Valor Compra:') !!}
    <p>{!! $textosCubo->valor_compra !!}</p>
</div>
