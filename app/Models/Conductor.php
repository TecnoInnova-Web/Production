<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Conductor
 *
 * @property $id
 * @property $nombreCompleto
 * @property $cedula
 * @property $telefono
 * @property $direccion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Conductor extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombreCompleto', 'cedula', 'telefono', 'direccion'];


}
