<?php

namespace Demo\Domain\UseCase;

use Demo\Infrastructure\Repositories\ArticleRepositoryInterface;

/**
 * Class ArticleUseCase
 * @package Demo\Domain\UseCase
 */
class ArticleUseCase
{

    private $articleRepository;

    public function __construct(ArticleRepositoryInterface $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function find($id)
    {
        return $this->articleRepository->find($id);
    }

    public function findAll()
    {
        return $this->articleRepository->findAll();
    }
}
