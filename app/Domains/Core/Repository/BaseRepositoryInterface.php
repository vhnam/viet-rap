<?php

namespace App\Domains\Core\Repository;

interface BaseRepositoryInterface
{
    public function create(array $attributes);

    public function update(array $attributes): bool;

    public function all($columns = array('*'), string $orderBy = 'id', string $sortBy = 'asc');

    public function find($id);

    public function findBy(array $data);

    public function findOneBy(array $data);

    public function findOneOrFail($id);

    public function delete(): bool;
}
