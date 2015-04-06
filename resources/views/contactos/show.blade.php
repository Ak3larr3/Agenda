@extends('app')
 
@section('content')
    <h2>Contacto:</h2>
    <h2>{{ $contacto->nombre }} {{$contacto->apellidos}}</h2>
 
   <p>Teléfono 1: {{ $contacto->telefono1 }}</p>
   <p>Teléfono 2: {{ $contacto->telefono2 }}</p>
   <p>Dirección: {{ $contacto->direccion }}</p>

   <p>{!! link_to_route('contactos.index', 'Volver a contactos') !!}</p>
           
    
@endsection