<?php

namespace App\Domains\Core\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    /**
     * BaseRepository Constructor
     * 
     * @param Model $model
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
     * @param array $data
     * @return boolean
     */
    public function update(array $data): bool {
        return $this->model->update($data);
    }

    public function all($columns = array('*'), string $orderBy = 'id', string $sortBy = 'asc') {
        // TODO
    }

    public function find($id) {
        // TODO
    }

    /**
     * @param  $id
     * @return mixed
     * @throws ModelNotFoundException
     */
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
