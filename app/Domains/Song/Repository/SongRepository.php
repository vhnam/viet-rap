<?php

namespace App\Domains\Song\Repository;

use Illuminate\Support\Collection;

use App\Domains\Song\Song;
use App\Domains\Song\Exceptions\CreateSongErrorException;
use App\Domains\Song\Exceptions\SongNotFoundErrorException;
use App\Domains\Song\Exceptions\UpdateSongErrorException;
use App\Domains\Song\Exceptions\DeleteSongErrorException;
use App\Domains\Core\Repository\BaseRepository;

class SongRepository extends BaseRepository implements SongRepositoryInterface
{
    /**
     * SongRepository constructor.
     *
     * @param Song $song
     */
    public function __construct(Song $song) {
        parent::__construct($song);
    }

    /**
     * Create an new Song
     * 
     * @param array $data
     * @return Song
     * @throws CreateSongErrorException
     */
    public function createSong(array $data): Song {
        try {
            return $this->create($data);
        } catch (QueryException $exception) {
            throw new CreateSongErrorException($exception);
        }
    }

    /**
     * Find an Song by ID
     * 
     * @param integer $id
     * @return Song
     * @throws SongNotFoundErrorException
     */
    public function findSongById(int $id): Song {
        try {
            return $this->findOneOrFail($id);
        } catch (QueryException $exception) {
            throw new SongNotFoundErrorException($exception);
        }
    }

    /**
     * @param array $columns
     * @param string $orderBy
     * @param string $sortBy
     *
     * @return Collection
     */
    public function listSongs($columns = array('*'), string $orderBy = 'id', string $sortBy = 'asc') : Collection {
        return $this->all($columns, $orderBy, $sortBy);
    }

    /**
     * @param array $data
     * @param int $id
     *
     * @return bool
     * @throws UpdateSongErrorException
     */
    public function updateSong(array $data): bool {
        try {
            return $this->update($data);
        } catch (QueryException $exception) {
            throw new UpdateSongErrorException($exception);
        }
    }

    /**
     * @return boolean
     * @throws DeleteSongErrorException
     */
    public function deleteSong(): bool {
        try {
            return $this->delete();
        } catch (QueryException $exception) {
            throw new DeleteSongErrorException($exception);
        }
    }
}
