<?php

namespace App\Domains\Artist\Repository;

use Illuminate\Support\Collection;

use App\Domains\Artist\Artist;
use App\Domains\Core\Repository\BaseRepositoryInterface;

interface ArtistRepositoryInterface extends BaseRepositoryInterface
{
    public function createArtist(array $data): Artist;

    public function findArtistById(int $id): Artist;

    public function updateArtist(array $data): bool;

    public function deleteArtist(): bool;
}
