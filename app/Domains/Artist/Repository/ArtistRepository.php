<?php

namespace App\Domains\Artist\Repository;

use App\Domains\Artist\Artist;
use App\Domains\Artist\Exceptions\UpdateArtistErrorException;
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
     * @throws CreateArtistErrorException
     */
    public function createArtist(array $data): Artist {
        try {
            return $this->create($data);
        } catch (QueryException $exception) {
            throw new CreateArtistErrorException($exception);
        }
    }

    /**
     * Find an artist by ID
     * 
     * @param integer $id
     * @return Artist
     * @throws ArtistNotFoundErrorException
     */
    public function findArtistById(int $id): Artist {
        try {
            return $this->findOneOrFail($id);
        } catch (QueryException $exception) {
            throw new ArtistNotFoundErrorException($exception);
        }
    }

    /**
     * @param array $data
     * @param int $id
     *
     * @return bool
     * @throws UpdateArtistErrorException
     */
    public function updateArtist(array $data): bool {
        try {
            return $this->update($data);
        } catch (QueryException $exception) {
            throw new UpdateArtistErrorException($exception);
        }
    }

    /**
     * Delete an artist by ID
     * 
     * @return boolean
     * @throws DeleteArtistErrorException
     */
    public function deleteArtist(): bool {
        try {
            return $this->delete();
        } catch (QueryException $exception) {
            throw new DeleteArtistErrorException($exception);
        }
    }
}
