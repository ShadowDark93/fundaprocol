<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Legale
 *
 * @property $id
 * @property $Name
 * @property $Doc
 * @property $State
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Legale extends Model
{
    
    static $rules = [
		'Name' => 'required',
		'Doc' => 'required',
		'State' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Name','Doc','State'];



}
