<?php

namespace Demo\Infrastructure\Repositories;

use Demo\Infrastructure\Eloquent\ArticleEloquent;
use Demo\Infrastructure\Translator\ArticleTranslator;
use Illuminate\Support\Collection;

/**
 * Class ArticleRepository
 */
class ArticleRepository implements ArticleRepositoryInterface
{
    /** @var ArticleEloquent */
    protected $eloquent;

    /**
     * ArticleRepository constructor.
     * @param ArticleEloquent $article
     */
    public function __construct(ArticleEloquent $article)
    {
        $this->eloquent = $article;
    }

    /**
     * Get Blog
     *
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        $eloquent = $this->eloquent->find($id);
        if (empty($eloquent)) {
            // TODO:: Error Handling
        }
        return ArticleTranslator::toModel($eloquent);
    }

    /**
     * Get Blog List
     *
     * @return mixed
     */
    public function findAll()
    {
        $collection = $this->eloquent->all();
        return $this->toModelCollection($collection);
    }

    public function toModelCollection(Collection $collection): Collection
    {
        return $collection->map(function (ArticleEloquent $eloquent) {
            return ArticleTranslator::toModel($eloquent);
        });
    }
}
