<?php

namespace App\Domains\Song\Repository;

use Illuminate\Support\Collection;

use App\Domains\Song\Song;
use App\Domains\Core\Repository\BaseRepositoryInterface;

interface SongRepositoryInterface extends BaseRepositoryInterface
{
    public function createSong(array $data): Song;

    // public function findSongById(int $id): Song;

    // public function listSongs(): Collection;

    // public function updateSong(array $data): bool;

    // public function deleteSong(): bool;
}
