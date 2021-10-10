<?php

namespace App\Http\Controllers;

use App\Services\Article\ArticleDomainService;
use App\Services\Article\ArticleApplicationService;
use GuzzleHttp\Psr7\Request;

class ArticleController extends Controller
{
    private $articleDS;
    private $articleAS;

    public function __construct(ArticleDomainService $articleDS, ArticleApplicationService $articleAS)
    {
        $this->articleDomainService = $articleDS;
        $this->articleApplicationService = $articleAS;
    }

    public function index()
    {
        return $this->articleApplicationService->get_all_articles();
    }

    public function detail(Request $request)
    {
        return $this->articleApplicationService->get_article_detail($request->id);
    }

    public function create(Request $request)
    {
        try {
            $this->articleApplicationService->create_article($request);
        } catch (\Throwable $th) {
            
        }
        return redirect('/');
    }

    public function edit(Request $request)
    {
        try {
            $this->articleApplicationService->edit_article($request);
        } catch (\Throwable $th) {
            
        }
        return redirect('/');
    }

    public function delete(Request $request)
    {
        try {
            $this->articleApplicationService->delete_article($request->id);
        } catch (\Throwable $th) {
            
        }
        return redirect('/');
    }
}
