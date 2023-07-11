<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Favorite
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $id_movie
 * @property $id_user
 *
 * @property Movie $movie
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Favorite extends Model
{

    static $rules = [
		'id_movie' => 'required',
		'id_user' => 'required',
    ];

    public $table= "favorite";

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_movie','id_user'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function movie()
    {
        return $this->hasOne('App\Models\Movie', 'id', 'id_movie');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }


}
