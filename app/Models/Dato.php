<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dato
 *
 * @property $id
 * @property $tzutujil
 * @property $spanish
 * @property $ingles
 * @property $hashtag
 * @property $iduser
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dato extends Model
{
    
    static $rules = [
		'tzutujil' => 'required',
		'spanish' => 'required',
		'ingles' => 'required',
		'hashtag' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tzutujil','spanish','ingles','hashtag','iduser'];



}
