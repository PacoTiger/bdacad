<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'profesores';

    /**
     * The connection name for the model.
     *
     * @var string
     */
    //protected $connection = 'mysql';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellidos', 'dni', 'direccion', 'cp', 'poblacion', 'provincia', 'tfijo', 'tmovil',
        'email', 'activo', 'legal', 'fecha', 'insercion', 'modificacion',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
