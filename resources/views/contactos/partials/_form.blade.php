<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre') !!}
</div>
<div class="form-group">
    {!! Form::label('apellidos', 'Apellidos:') !!}
    {!! Form::text('apellidos') !!}
</div>
<div class="form-group">
    {!! Form::label('telefono1', 'Teléfono 1:') !!}
    {!! Form::text('telefono1') !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>