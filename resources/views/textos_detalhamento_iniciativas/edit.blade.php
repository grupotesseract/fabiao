@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Textos Detalhamento Iniciativa
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($textosDetalhamentoIniciativa, ['route' => ['textosDetalhamentoIniciativas.update', $textosDetalhamentoIniciativa->id], 'method' => 'patch']) !!}

                        @include('textos_detalhamento_iniciativas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection