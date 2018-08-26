<?php

namespace App\Domains\Album\Repository;

use Illuminate\Support\Collection;

use App\Domains\Album\Album;
use App\Domains\Core\Repository\BaseRepositoryInterface;

interface AlbumRepositoryInterface
{
    public function createAlbum(array $data): Album;

    public function findAlbumById(int $id): Album;

    public function listAlbums(): Collection;

    public function updateAlbum(array $data): bool;

    public function deleteAlbum(): bool;
}
