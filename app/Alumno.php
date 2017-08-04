<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellidos', 'dni', 'fecha_nac', 'direccion', 'cp', 'poblacion', 'provincia', 'tfijo', 'tmovil',
        'email', 'tutor', 'activo', 'domiciliacion', 'ccc', 'especial', 'legal', 'comentario', 'fecha', 'insercion',
        'modificacion',
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
            $query->where(\DB::raw("CONCAT(nombre,' ',apellidos)"),'LIKE',"%$nombre%");
        }
    }
}
