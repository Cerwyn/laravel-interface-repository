<?php

namespace App\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\EloquentRepositoryInterface;
use Illuminate\Container\Container;

abstract class BaseRepository implements EloquentRepositoryInterface
{
    protected $model;

    abstract function model();

    public function __construct()
    {
        $this->makeModel();
    }

    public function makeModel()
    {
        $model = app($this->model());

        if (!$model instanceof Model)
            abort(500);

        return $this->model = $model;
    }

    public function create(array $attribute): Model
    {
        return $this->model->create($attribute);
    }

    public function find($id): ?Model
    {
        return $this->model->find($id);
    }
}
