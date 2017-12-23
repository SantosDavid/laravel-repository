<?php

namespace App\Repositories\Operations;

trait Create 
{
    public function create($post) 
    {
        $model = $this->model();   

        try{
            
            return $model->create($post);

        }catch(\PDOException $e) {
            return false;
        }
    }
}