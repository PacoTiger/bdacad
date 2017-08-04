<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Tarifa extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nivel', 'horas', 'precio', 'activo', 'fecha',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'insercion', 'modificacion',
    ];

    public function setFechaAttributes($value)
    {
        $this->attributes['fecha'] = Carbon::now();
    }

}
