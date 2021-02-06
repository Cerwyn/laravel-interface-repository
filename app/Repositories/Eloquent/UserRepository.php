<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Support\Collection;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    function model()
    {
        return 'App\Models\User';
    }

    public function all(): Collection
    {
        return $this->model->all();
    }
}
