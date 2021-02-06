<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;

    public function __construct(UserRepositoryInterface $repo)
    {
        $this->user = $repo;
    }

    public function index()
    {
       
        return $this->user->test();
    }
}
