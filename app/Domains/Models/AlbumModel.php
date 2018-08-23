<?php

namespace App\Domains\Models;

use Illuminate\Database\Eloquent\Model;

class AlbumModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'albums';

    /**
	 * One to Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function artists()
	{
		return $this->belongsTo(Artist::class);
	}
}
