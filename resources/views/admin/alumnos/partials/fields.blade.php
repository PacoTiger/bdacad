{!! Field::text('nombre') !!}
{!! Field::text('apellidos') !!}
{!! Field::text('dni') !!}
{!! Field::date('fecha_nac') !!}
{!! Field::text('direccion') !!}
{!! Field::text('cp') !!}
{!! Field::text('poblacion','Murcia') !!}
{!! Field::text('provincia','Murcia') !!}
{!! Field::text('tfijo') !!}
{!! Field::text('tmovil') !!}
{!! Field::email('email') !!}
{!! Field::text('tutor') !!}
{!! Form::radios('activo', ['1' => 'Activo', '0' => 'No activo'], '1') !!}
{!! Form::radios('domiciliacion', ['1' => 'Domiciliado', '0' => 'No domiciliado'], '1') !!}
{!! Field::text('ccc') !!}
{!! Form::radios('especial', ['1' => 'Especial', '0' => 'No especial'], '1') !!}
{!! Form::radios('legal', ['1' => 'Legal', '0' => 'No legal'], '1') !!}
{!! Field::textarea('comentario', null, ['rows' => 4]) !!}
{!! Field::date('fecha', \Carbon\Carbon::now()) !!}
{!! Field::text('insercion') !!}
{!! Field::text('modificacion') !!}