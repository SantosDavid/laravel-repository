<?php

namespace App\Repositories\Contracts;

interface PostContract
{
    public function list(int $paginate = 0, Array $fields = []);
    public function find(int $id, Array $fields = []);
    public function update(Array $dados, int $id);
    public function destroy(int $id);
}