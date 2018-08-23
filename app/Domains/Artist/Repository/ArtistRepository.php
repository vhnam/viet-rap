<?php

namespace App\Domains\Artist\Repository;

use App\Domains\Artist\Artist;
use App\Domains\Core\Repository\BaseRepository;

class ArtistRepository extends BaseRepository implements ArtistRepositoryInterface
{
    /**
     * ArtistRepository constructor.
     *
     * @param Artist $artist
     */
    public function __construct(Artist $artist) {
        parent::__construct($artist);
    }

    /**
     * Create an new artist
     * 
     * @param array $data
     * @return Artist
     */
    public function createArtist(array $data): Artist {
        return $this->create($data);
    }

    /**
     * Find an artist by ID
     * 
     * @param integer $id
     * @return Artist
     */
    public function findArtistById(int $id): Artist {
        return $this->findOneOrFail($id);
    }

    public function updateArtist(array $data): bool {
        // try {
        //     return $this->update($data);
        // } catch (QueryException $exception) {
        //     throw new UpdateArtistErrorException($exception);
        // }
    }

    public function deleteArtist(int $id): bool {
        return true;
    }

    public function saveArtist(Artist $artist) {
        // TODO
    }
}
