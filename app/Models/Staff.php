<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Staff
 *
 * @property $id
 * @property $Nombres
 * @property $Apellidos
 * @property $Cargo
 * @property $Telefono
 * @property $Foto
 * @property $Estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Staff extends Model
{

    static $rules = [
		'Nombres' => 'required',
		'Apellidos' => 'required',
		'Cargo' => 'required',
		'Foto' => 'image|max:2048',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombres','Apellidos','Cargo','Telefono','Foto','Estado'];



}