{!! Field::text('nombre') !!}
{!! Field::text('apellidos') !!}
{!! Field::text('dni') !!}
{!! Field::text('direccion') !!}
{!! Field::text('cp') !!}
{!! Field::text('poblacion','Murcia') !!}
{!! Field::text('provincia','Murcia') !!}
{!! Field::text('tfijo') !!}
{!! Field::text('tmovil') !!}
{!! Field::email('email') !!}
{!! Form::radios('activo', ['1' => 'Activo', '0' => 'No activo'], '1') !!}
{!! Form::radios('legal', ['1' => 'Legal', '0' => 'No legal'], '1') !!}
{!! Field::date('fecha', \Carbon\Carbon::now()) !!}
{!! Field::text('insercion') !!}
{!! Field::text('modificacion') !!}