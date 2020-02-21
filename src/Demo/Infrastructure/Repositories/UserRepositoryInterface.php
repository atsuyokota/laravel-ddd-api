<?php

namespace Demo\Infrastructure\Repositories;

use Demo\Domain\Model\User;
use Illuminate\Support\Collection;

/**
 * Interface UserRepositoryInterface
 * @package Demo\Infrastructure\Repositories
 */
interface UserRepositoryInterface
{
    /**
     * @param $id
     * @return mixed
     */
    public function find($id): User;

    /**
     * @return mixed
     */
    public function findAll(): Collection;
}
