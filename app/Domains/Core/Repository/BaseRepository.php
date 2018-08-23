<?php

namespace App\Domains\Core\Repository;

use Illuminate\Database\Eloquent\Model;

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

    public function update(array $attributes): bool {
        // TODO
        
        return true;
    }

    public function all($columns = array('*'), string $orderBy = 'id', string $sortBy = 'asc') {
        // TODO
    }

    public function find($id) {
        // TODO
    }

    public function findOneOrFail($id) {
        // TODO
    }

    public function findBy(array $data) {
        // TODO
    }

    public function findOneBy(array $data) {
        // TODO
    }

    public function findOneByOrFail(array $data) {
        // TODO
    }

    public function delete(): bool {
        // TODO

        return true;
    }
}
