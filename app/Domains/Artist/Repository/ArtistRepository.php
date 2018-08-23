<?php

namespace App\Domains\Artist\Repository;

use App\Domains\Models\ArtistModel;
use App\Domains\Core\Repository\BaseRepository;

class ArtistRepository extends BaseRepository implements ArtistRepositoryInterface
{
    /**
     * ArtistRepository constructor.
     *
     * @param ArtistModel $artist
     */
    public function __construct(ArtistModel $artist) {
        parent::__construct($artist);
    }

    public function createArtist(array $data): ArtistModel {
        return $this->create($data);
    }

    public function findArtistById(int $id): ArtistModel {
        return $this->model;
    }

    public function updateArtist(array $data): bool {
        return true;
    }

    public function deleteArtist(int $id): bool {
        return true;
    }

    public function saveArtist(ArtistModel $artist) {
        // TODO
    }
}
