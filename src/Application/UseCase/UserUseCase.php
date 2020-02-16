<?php

namespace Demo\Application\UseCase;

use Demo\Infrastructure\Repositories\UserRepositoryInterface;

/**
 * Class UserUseCase
 * @package Demo\Application\UseCase
 */
class UserUseCase
{

    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function find($id)
    {
        return $this->userRepository->find($id);
    }

    public function findAll()
    {
        return $this->userRepository->findAll();
    }
}
