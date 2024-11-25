<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Horario
 *
 * @property $id
 * @property $hora_salida_canada
 * @property $hora_llegada_centro
 * @property $hora_salida_centro
 * @property $hora_llegada_canada
 * @property $autobus_id
 * @property $conductor_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Autobus $autobus
 * @property Conductor $conductor
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Horario extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['hora_salida_canada', 'hora_llegada_centro', 'hora_salida_centro', 'hora_llegada_canada', 'autobus_id', 'conductor_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function autobus()
    {
        return $this->belongsTo(\App\Models\Autobus::class, 'autobus_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function conductor()
    {
        return $this->belongsTo(\App\Models\Conductor::class, 'conductor_id', 'id');
    }
    
}
