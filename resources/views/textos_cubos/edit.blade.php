@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Textos Cubo
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($textosCubo, ['route' => ['textosCubos.update', $textosCubo->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('textos_cubos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
