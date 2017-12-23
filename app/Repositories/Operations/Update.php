<?php

namespace App\Repositories\Operations;

trait Update 
{
    public function update(Array $dados, int $id) 
    {
        $model = $this->model();   

        $post = $model->find($id);

        if (!$post) {

            return false;
        }

        $post->fill($dados);

        return $post->save();
    }
}