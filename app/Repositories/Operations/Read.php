<?php

namespace App\Repositories\Operations;

trait Read 
{
    public function list(int $paginate = 0, Array $fields = []) 
    {
        $model = $this->model();   

        if ($paginate === 0) {
            
            if (count($fields) === 0) {

                return $model->all();
            }

            return $model->select($fields)->get();
        }
        
        if (count($fields) === 0) {
            
            return $model->all();
        }
        
        return $model->select($fields)->get();
    }
}