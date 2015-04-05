@extends('app')
 
@section('content')
    <h2>Contactos</h2>
 
    @if ( !$contactos->count() )
        Contactos
    @else
        <ul>
            @foreach( $contactos as $contacto )
                <li><a href="{{ route('contactos.show', $contacto->id) }}">{{ $contacto->nombre }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection