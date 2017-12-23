<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\PostContract as Repository;

class PostController extends Controller
{
    protected $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->list(30);
    }

    public function store(Request $request)
    {
        $post = $this->repository->create( $request->all() );

        if (!$post) {

            return response(['erro' => 'Erro ao inserir registro'], 500);
        }

        return response(['sucesso' => 'Post cadastrado com sucesso'], 201);
    }

    public function show($id)
    {
        $post = $this->repository->find($id);

        if (!$post) {

            return response(['erro' => 'Post não encontrado']);
        }

        return $post;
    }

    public function update(Request $request, $id)
    {
        $post = $this->repository->update($request->all(), $id);

        if (!$post) {

            return response(['erro' => 'Erro ao efetuar a atualização'], 500);
        }

        return response(['sucesso' => 'Post atualizado com sucesso'], 200);
    }

    public function destroy($id)
    {
        $post = $this->repository->destroy($id);

        if (!$post) {

            return response(['erro' => 'Post não encontrado'], 404);
        }

        return response(['sucesso' => 'Post deletado com sucesso'], 200);
    }
}
