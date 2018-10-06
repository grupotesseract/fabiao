{!! Form::open(['route' => ['clientes.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('clientes.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
</div>
{!! Form::close() !!}
