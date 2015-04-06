@extends('app')
 
@section('content')
    <h2>Crear Contacto</h2>
 
    {!! Form::model(new App\Contacto, ['route' => ['contactos.store']]) !!}
        @include('contactos/partials/_form', ['submit_text' => 'Crear Contacto'])
    {!! Form::close() !!}
@endsection
 
