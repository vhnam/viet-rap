<?php

namespace App\Domains\Core\Repository;

use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    /**
     * BaseRepository Constructor
     * 
     * @param Illuminate\Database\Eloquent\Model $model
     */
    public function __construct(Model $model) {
        $this->model = $model;
    }

    /**
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes) {
        return $this->model->create($attributes);
    }

    /**
     * @param array $attributes
     * @return boolean
     */
    public function update(array $attributes): bool {
        return $this->model->update($attributes);
    }

    public function all($columns = array('*'), string $orderBy = 'id', string $sortBy = 'asc') {
        // TODO
    }

    public function find($id) {
        // TODO
    }

    public function findOneOrFail($id) {
        return $this->model->findOrFail($id);
    }

    public function findBy(array $data) {
        // TODO
    }

    public function findOneBy(array $data) {
        // TODO
    }

    public function delete(): bool {
        // TODO

        return true;
    }
}
