<?php

namespace App\Services\Article;

use App\Repositories\Article\ArticleRepositoryInterface as ArticleRepository;

class ArticleApplicationService
{
    private $articleRepo;

    public function __construct(ArticleRepository $articleRepo)
    {
        $this->articleRepositry = $articleRepo;
    }

    public function get_all_articles()
    {
        return $this->articleRepositry->get_all();
    }

    public function get_article_detail()
    {
        return $this->articleRepositry->get_detail();
    }

    public function create_article($request)
    {
        $this->articleRepositry->create($request);
    }

    public function edit_article($request)
    {
        $this->articleRepositry->edit($request);
    }

    public function delete_article($request)
    {
        $this->articleRepositry->delete($request);
    }
}
