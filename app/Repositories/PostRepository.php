<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\Contracts\{PostContract, BaseContract};
use App\Repositories\Operations\{Create, Read, Find, Update, Destroy};

class PostRepository implements BaseContract, PostContract
{
    use Create, Read, Find, Update, Destroy;

    public function model()
    {
        return new Post();
    }
}