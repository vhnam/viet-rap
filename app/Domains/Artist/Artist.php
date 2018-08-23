<?php

namespace App\Domains\Artist;

use Illuminate\Database\Eloquent\Model;

use App\Domains\Album\Album;
use App\Domains\Song\Song;

class Artist extends Model
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
    public function albums() {
        return $this->hasMany(Album::class);
    }

    /**
     * One to Many relation
     *
     * @return Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function songs() {
        return $this->belongsToMany(Song::class);
    }
}
