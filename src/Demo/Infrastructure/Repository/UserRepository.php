<?php

namespace Demo\Infrastructure\Repository;

use Demo\Domain\Model\User;
use Demo\Domain\Repository\UserRepositoryInterface;
use Demo\Infrastructure\Eloquent\UserEloquent;
use Demo\Infrastructure\Translator\UserTranslator;
use Illuminate\Support\Collection;

/**
 * Class UserRepository
 * @package Demo\Infrastructure\Repositories
 */
class UserRepository implements UserRepositoryInterface
{
    /** @var UserEloquent */
    protected $eloquent;

    /**
     * UserRepository constructor.
     * @param UserEloquent $user
     */
    public function __construct(UserEloquent $user)
    {
        $this->eloquent = $user;
    }

    /**
     * Get User
     * @param $id
     * @return User
     */
    public function find($id): User
    {
        $eloquent = $this->eloquent->find($id);
        if (empty($eloquent)) {
            // TODO:: Error Handling
        }
        return UserTranslator::toModel($eloquent);
    }

    /**
     * Get User List
     * @return Collection
     */
    public function findAll(): Collection
    {
        $collection = $this->eloquent->all();
        return $collection->map(function (UserEloquent $eloquent) {
            return UserTranslator::toModel($eloquent);
        });
    }
}
