<?php

namespace App\Repositories\Operations;

trait Destroy 
{
    public function destroy(int $id) 
    {
        $model = $this->model();   

        return $model->destroy($id);
    }
}