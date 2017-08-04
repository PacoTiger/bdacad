<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'activo', 'nivel_tarifa', 'centro_id', 'fecha', 'insercion', 'modificacion',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    public function scopeNombre($query, $nombre)
    {
        if (trim($nombre) != '') {
            $query->where('nombre','LIKE',"%$nombre%");
        }
    }
}
