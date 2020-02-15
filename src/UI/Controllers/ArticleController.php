<?php

namespace Demo\UI\Controllers;

use App\Http\Controllers\Controller;
use Demo\UI\Resources\ArticleResource;
use Demo\Domain\UseCase\ArticleUseCase;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ArticleController extends Controller
{

    private $usecase;
    private $resouce;

    public function __construct(ArticleUseCase $articleUseCase, ArticleResource $articleResource)
    {
        $this->usecase = $articleUseCase;
        $this->resouce = $articleResource;
    }

    public function index(Request $request)
    {
        $limit = $request->get('limit', Config::get('app.article_list_limit_default'));
        $articles = $this->usecase->findAll();
        return $this->resouce->collection($articles);
    }

    public function show(Request $request, string $id)
    {
        $article = $this->usecase->find($id);
        return $this->resouce->toArray($article);
    }
}
