@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Textos Iniciativa
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'textosIniciativas.store']) !!}

                        @include('textos_iniciativas.create_fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
