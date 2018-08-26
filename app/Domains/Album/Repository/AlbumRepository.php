<?php

namespace App\Domains\Album\Repository;

use Illuminate\Support\Collection;

use App\Domains\Album\Album;
use App\Domains\Album\Exceptions\CreateAlbumErrorException;
use App\Domains\Album\Exceptions\AlbumNotFoundErrorException;
use App\Domains\Album\Exceptions\DeleteAlbumErrorException;
use App\Domains\Album\Exceptions\UpdateAlbumErrorException;
use App\Domains\Core\Repository\BaseRepository;

class AlbumRepository extends BaseRepository implements AlbumRepositoryInterface
{
    /**
     * AlbumRepository constructor.
     *
     * @param Album $album
     */
    public function __construct(Album $album) {
        parent::__construct($album);
    }

    /**
     * Create an new Album
     * 
     * @param array $data
     * @return Album
     * @throws CreateAlbumErrorException
     */
    public function createAlbum(array $data): Album {
        try {
            return $this->create($data);
        } catch (QueryException $exception) {
            throw new CreateAlbumErrorException($exception);
        }
    }

    /**
     * Find an Album by ID
     * 
     * @param integer $id
     * @return Album
     * @throws AlbumNotFoundErrorException
     */
    public function findAlbumById(int $id): Album {
        try {
            return $this->findOneOrFail($id);
        } catch (QueryException $exception) {
            throw new AlbumNotFoundErrorException($exception);
        }
    }

    /**
     * @param array $columns
     * @param string $orderBy
     * @param string $sortBy
     *
     * @return Collection
     */
    public function listAlbums($columns = array('*'), string $orderBy = 'id', string $sortBy = 'asc') : Collection {
        return $this->all($columns, $orderBy, $sortBy);
    }

    /**
     * @param array $data
     * @param int $id
     *
     * @return bool
     * @throws UpdateAlbumErrorException
     */
    public function updateAlbum(array $data): bool {
        try {
            return $this->update($data);
        } catch (QueryException $exception) {
            throw new UpdateAlbumErrorException($exception);
        }
    }

    /**
     * @return boolean
     * @throws DeleteAlbumErrorException
     */
    public function deleteAlbum(): bool {
        try {
            return $this->delete();
        } catch (QueryException $exception) {
            throw new DeleteAlbumErrorException($exception);
        }
    }
}
