<?php

namespace App\Http\Controllers;

use Demo\Domain\UseCase\ArticleUseCase;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ArticleController extends Controller
{

    private $usecase;

    public function __construct(ArticleUseCase $articleUseCase)
    {
        $this->usecase = $articleUseCase;
    }

    public function index(Request $request)
    {
        $limit = $request->get('limit', Config::get('app.article_list_limit_default'));
        $cars = $this->usecase->findAll();
        var_dump($cars);
    }

    public function show(Request $request, string $id)
    {
        $article = $this->usecase->find($id);
        var_dump($article);
    }
}
