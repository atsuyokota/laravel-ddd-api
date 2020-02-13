<?php

namespace Infrastructure\Repositories;

/**
 * Interface ArticleRepositoryInterface
 */
interface ArticleRepositoryInterface
{
    /**
     * @param $id
     * @param $options
     * @return mixed
     */
    public function find($id, $options);

    /**
     * @param $options
     * @return mixed
     */
    public function findAll($options);
}
