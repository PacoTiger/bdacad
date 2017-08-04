{!! Field::text('nombre') !!}
{!! Form::radios('activo', ['1' => 'Activo', '0' => 'No activo'], '1') !!}
{!! Form::label('Nivel') !!}
{!! Form::number('nivel_tarifa') !!}
{!! Form::label('Centro') !!}
{!! Form::number('centro_id') !!}
{!! Field::date('fecha', \Carbon\Carbon::now()) !!}
{!! Field::text('insercion') !!}
{!! Field::text('modificacion') !!}