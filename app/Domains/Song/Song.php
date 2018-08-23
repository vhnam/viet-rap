<?php

namespace App\Domains\Song;

use Illuminate\Database\Eloquent\Model;

use App\Domains\Artist\Artist;

class Song extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'songs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'views', 'lyrics'];

    /**
     * One to Many relation
     *
     * @return Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function artists() {
        return $this->belongsToMany(Artist::class);
    }
}
