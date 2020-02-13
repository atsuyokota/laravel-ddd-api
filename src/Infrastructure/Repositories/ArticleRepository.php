<?php

namespace Infrastructure\Repositories;

use Infrastructure\Eloquent\ArticleEloquent;

/**
 * Class ArticleRepository
 */
class ArticleRepository extends implements ArticleRepositoryInterface
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
        // TODO::toModel
        return $eloquent;
    }

    /**
     * Get Blog List
     *
     * @return mixed
     */
    public function findAll()
    {
        $collection = $this->eloquent->findAll();
        // TODO:toModel
        return $collection;
    }
}
