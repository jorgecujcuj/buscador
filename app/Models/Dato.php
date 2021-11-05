<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasOne;

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
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tzutujil','spanish','ingles','hashtag','iduser'];

    /**
     *@return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id','iduser');
    }

}
