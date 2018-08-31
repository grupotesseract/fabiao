<li class="header">PRINCIPAL</li>

<li class="treeview">
    <a href="/home">Home</a>
</li>

<li class="treeview">
    <a href="/users">Usuários</a>
</li>

<li class="header">TEXTOS</li>

<li class="{{ Request::is('textoEntradas*') ? 'active' : '' }}">
    <a href="{!! route('textoEntradas.index') !!}">Entrada</a>
</li>

<li class="{{ Request::is('textoExposicaoACrises*') ? 'active' : '' }}">
    <a href="{!! route('textoExposicaoACrises.index') !!}">Exposição à Crise</a>
</li>

<li class="{{ Request::is('textoPosicionamentoEstrategicos*') ? 'active' : '' }}">
    <a href="{!! route('textoPosicionamentoEstrategicos.index') !!}">Posicionamento Estratégico</a>
</li>

<li class="{{ Request::is('textoPosicaoFinanceiras*') ? 'active' : '' }}">
    <a href="{!! route('textoPosicaoFinanceiras.index') !!}">Posição Financeira</a>
</li>

<li class="{{ Request::is('textosCubos*') ? 'active' : '' }}">
    <a href="{!! route('textosCubos.index') !!}">Cubo</a>
</li>

<li class="{{ Request::is('textosIniciativas*') ? 'active' : '' }}">
    <a href="{!! route('textosIniciativas.index') !!}">Iniciativa</a>
</li>

<li class="{{ Request::is('textosDetalhamentoIniciativas*') ? 'active' : '' }}">
    <a href="{!! route('textosDetalhamentoIniciativas.index') !!}">Detalhamento Iniciativa</a>
</li>

