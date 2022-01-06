<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contacto
 *
 * @property $id
 * @property $Nombres
 * @property $Titulo
 * @property $Correo
 * @property $Descripcion
 * @property $Respuesta
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
		/* 'Nombres' => 'required',
		'Apellidos' => 'required',
		'Titulo' => 'required',
		'Correo' => 'required',
		'Descripcion' => 'required', */
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombres','Titulo','Correo','Descripcion','Respuesta','estado'];



}