@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Texto Entrada
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($textoEntrada, ['route' => ['textoEntradas.update', $textoEntrada->id], 'method' => 'patch']) !!}

                        @include('texto_entradas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection