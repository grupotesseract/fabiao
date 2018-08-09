@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Texto Posicionamento Estrategico
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'textoPosicionamentoEstrategicos.store']) !!}

                        @include('texto_posicionamento_estrategicos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
