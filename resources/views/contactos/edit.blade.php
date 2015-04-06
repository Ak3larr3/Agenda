
@extends('app')
 
@section('content')
    <h2>Editar Contacto</h2>
 
    {!! Form::model($contacto, ['method' => 'PATCH', 'route' => ['contactos.update', $contacto->id]]) !!}
        @include('contactos/partials/_form', ['submit_text' => 'Editar Contacto'])
    {!! Form::close() !!}
@endsection