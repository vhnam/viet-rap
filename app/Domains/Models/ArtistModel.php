<?php

namespace App\Domains\Models;

use Illuminate\Database\Eloquent\Model;

class ArtistModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'artists';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'profile', 'alias', 'coverImage', 'artistImage'];

    /**
     * One to Many relation
     *
     * @return Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function albums()
    {
      return $this->hasMany(Album::class, 'id', 'artist');
    }
}
