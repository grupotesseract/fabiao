@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Texto Posicao Financeira
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'textoPosicaoFinanceiras.store']) !!}

                        @include('texto_posicao_financeiras.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
