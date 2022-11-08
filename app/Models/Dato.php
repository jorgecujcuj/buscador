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
		'tzutujil' => ['required', 'string', 'size:8'],
		'spanish' => ['required', 'string', 'max:10'],
		'ingles' => ['required', 'string', 'max:10'],
    'hashtag' => ['string', 'max:10'],
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
