<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Movie
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $title
 * @property $description
 * @property $duration
 * @property $director
 * @property $year
 * @property $url
 * @property $important
 * @property $id_category
 *
 * @property Category $category
 * @property Favorite[] $favorites
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Movie extends Model
{

    public $table= "movie";

    static $rules = [
		'title' => 'required',
		'description' => 'required',
		'duration' => 'required',
		'director' => 'required',
		'year' => 'required',
		'url' => 'required',
		'important' => 'required',
		'id_category' => 'required',
    ];



    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','description','duration','director','year','url','important','id_category'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'id_category');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function favorites()
    {
        return $this->hasMany('App\Models\Favorite', 'id_movie', 'id');
    }


}
