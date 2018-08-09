<li class="treeview">
	<a href="/home"><span>Home</span></a>
</li>
<li class="treeview">
	<a href="/users"><span>Usuários</span></a>
</li>
<li class="{{ Request::is('textoEntradas*') ? 'active' : '' }}">
    <a href="{!! route('textoEntradas.index') !!}"><span>Texto Entrada</span></a>
</li>

<li class="{{ Request::is('textoExposicaoACrises*') ? 'active' : '' }}">
    <a href="{!! route('textoExposicaoACrises.index') !!}"><span>Texto Exposição à Crise</span></a>
</li>

<li class="{{ Request::is('textoPosicionamentoEstrategicos*') ? 'active' : '' }}">
    <a href="{!! route('textoPosicionamentoEstrategicos.index') !!}"><span>Texto Posicionamento Estratégico</span></a>
</li>

<li class="{{ Request::is('textoPosicaoFinanceiras*') ? 'active' : '' }}">
    <a href="{!! route('textoPosicaoFinanceiras.index') !!}"><span>Texto Posicao Financeira</span></a>
</li>

<li class="{{ Request::is('textosCubos*') ? 'active' : '' }}">
    <a href="{!! route('textosCubos.index') !!}"><span>Textos Cubo</span></a>
</li>

<li class="{{ Request::is('textosIniciativas*') ? 'active' : '' }}">
    <a href="{!! route('textosIniciativas.index') !!}"><span>Textos Iniciativa</span></a>
</li>
<li class="{{ Request::is('textosDetalhamentoIniciativas*') ? 'active' : '' }}">
    <a href="{!! route('textosDetalhamentoIniciativas.index') !!}"><span>Textos Detalhamento Iniciativa</span></a>
</li>

