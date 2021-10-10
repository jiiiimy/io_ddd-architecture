<?php

namespace App\Repositories\Article;

use App\Models\Article;

class ArticleRepository implements ArticleRepositoryInterface
{
    public function get_all()
    {
        return Article::all();
    }

    public function get_detail($id)
    {
        $article = Article::where('id', $id)->first();

        if(!$article) return \App::abort(404);

        return $article;
    }

    public function create($requiest)
    {
        $article = Article::new();
        $article->fill($requiest->data);
    }

    public function edit($request)
    {
        $article = Article::where('id', $request->id)->first();
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();
    }

    public function delete($id)
    {
        $article = Article::where('id', $id)->first();
        $article->delete();
    }
}
