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

    public function createArtist(array $data): Artist {
        return $this->create($data);
    }

    public function findArtistById(int $id): Artist {
        return $this->model;
    }

    public function updateArtist(array $data): bool {
        return true;
    }

    public function deleteArtist(int $id): bool {
        return true;
    }

    public function saveArtist(Artist $artist) {
        // TODO
    }
}
