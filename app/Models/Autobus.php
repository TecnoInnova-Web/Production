<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Autobus
 *
 * @property $id
 * @property $marca
 * @property $modelo
 * @property $placa
 * @property $color
 * @property $capacidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Horario[] $horarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Autobus extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['marca', 'modelo', 'placa', 'color', 'capacidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function horarios()
    {
        return $this->hasMany(\App\Models\Horario::class, 'id', 'autobus_id');
    }
    
}
