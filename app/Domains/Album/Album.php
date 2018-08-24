<?php

namespace App\Domains\Album;

use Illuminate\Database\Eloquent\Model;

use App\Domains\Artist\Artist;
use App\Domains\Song\Song;

class Album extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'albums';

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'coverImage', 'artist'];

    /**
	 * One to Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function artist() {
		return $this->belongsTo(Artist::class);
    }

    /**
	 * One to Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function songs() {
		return $this->belongsTo(Song::class);
	}
}
