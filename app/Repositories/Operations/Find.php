<?php

namespace App\Repositories\Operations;

trait Find 
{
    public function find(int $id, Array $fields = []) 
    {
        $model = $this->model();   

        if (count($fields) === 0) {

            return $model->find($id);
        }

        return $model->select($fields)->find($id);
    }
}