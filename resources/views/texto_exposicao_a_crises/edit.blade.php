@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Texto Exposicao A Crise
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($textoExposicaoACrise, ['route' => ['textoExposicaoACrises.update', $textoExposicaoACrise->id], 'method' => 'patch']) !!}

                        @include('texto_exposicao_a_crises.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection