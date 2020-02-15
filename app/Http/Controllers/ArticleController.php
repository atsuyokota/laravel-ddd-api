<?php

namespace App\Http\Controllers;

use Demo\Infrastructure\Repositories\ArticleRepositoryInterface;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ArticleController extends Controller
{

    private $repository;

    public function __construct(ArticleRepositoryInterface $articleRepository)
    {
        $this->repository = $articleRepository;
    }

    public function index(Request $request)
    {
        $limit = $request->get('limit', Config::get('app.article_list_limit_default'));
        $cars = $this->repository->findAll();
        var_dump($cars);
    }

    public function show(Request $request, string $id)
    {
        $article = $this->repository->find($id);
        var_dump($article);
    }
}
