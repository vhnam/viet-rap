<?php

namespace App\Domains\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'artists';

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
