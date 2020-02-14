<?php

namespace Demo\Infrastructure\Repositories;

/**
 * Interface ArticleRepositoryInterface
 */
interface ArticleRepositoryInterface
{
    /**
     * @param $id
     * @return mixed
     */
    public function find($id);

    /**
     * @return mixed
     */
    public function findAll();
}
