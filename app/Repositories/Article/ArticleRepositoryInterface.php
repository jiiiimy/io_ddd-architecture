<?php

namespace App\Repositories\Article;

interface ArticleRepositoryInterface
{
    public function get_all();

    public function get_detail($id);

    public function create($data);

    public function edit($data);

    public function delete($id);
}
