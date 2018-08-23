<?php

namespace App\Domains\Repositories\Interfaces;

use Illuminate\Support\Collection;
use App\Domains\Models\ArtistModel;

interface ArtistRepositoryInterface extends BaseRepositoryInterface
{
    public function createArtist(array $data): ArtistModel;

    public function findArtistById(int $id): ArtistModel;

    public function updateArtist(array $data): bool;

    public function deleteArtist(int $id): bool;

    public function saveArtist(ArtistModel $artist);
}
