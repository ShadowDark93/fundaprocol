<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contacto
 *
 * @property $id
 * @property $Nombres
 * @property $Apellidos
 * @property $Telefono
 * @property $Correo
 * @property $Descripcion
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contacto extends Model
{
    
    static $rules = [
		'Nombres' => 'required',
		'Apellidos' => 'required',
		'Telefono' => 'required',
		'Correo' => 'required',
		'Descripcion' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombres','Apellidos','Telefono','Correo','Descripcion','estado'];



}
