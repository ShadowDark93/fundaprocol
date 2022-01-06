<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Partner
 *
 * @property $id
 * @property $Nombre
 * @property $url
 * @property $Telefono
 * @property $Direccion
 * @property $Imagen
 * @property $Estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Partner extends Model
{

    static $rules = [
		'Nombre' => 'required',
		'Imagen' => 'required|image|max:2048',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','url','Telefono','Direccion','Imagen','Estado'];



}