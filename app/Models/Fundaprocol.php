<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Fundaprocol
 *
 * @property $id
 * @property $Nit
 * @property $Cel
 * @property $Mision
 * @property $Vision
 * @property $Principios
 * @property $Correo
 * @property $Facebook
 * @property $Instagram
 * @property $Linkedin
 * @property $Youtube
 * @property $Twitter
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Fundaprocol extends Model
{
    
    static $rules = [
		'Nit' => 'required',
		'Cel' => 'required',
		'Mision' => 'required',
		'Vision' => 'required',
		'Principios' => 'required',
		'Correo' => 'required',
		'Facebook' => 'required',
		'Instagram' => 'required',
		'Linkedin' => 'required',
		'Youtube' => 'required',
		'Twitter' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nit','Cel','Mision','Vision','Principios','Correo','Facebook','Instagram','Linkedin','Youtube','Twitter'];



}
