@extends('app')
 
@section('content')
    <h2>Contactos</h2>
 
    @if ( !$contactos->count() )
        <p>No hay contactos.</p>
    @else
        <ul>
            @foreach( $contactos as $contacto )
                {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('contactos.destroy', $contacto->id))) !!}
                <li><a href="{{ route('contactos.show', $contacto->id) }}">{{ $contacto->nombre }}</a></li>
                <p></p>
                {!! link_to_route('contactos.edit', 'Editar', array($contacto->id), array('class' => 'btn btn-info')) !!}
                {!! Form::submit('Borrar', array('class' => 'btn btn-danger')) !!}
                {!! Form::close() !!}
            @endforeach
        </ul>
    @endif
    {!! link_to_route('contactos.create', 'Crear contacto') !!}
@endsection

