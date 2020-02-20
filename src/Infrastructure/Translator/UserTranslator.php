<?php

namespace Demo\Infrastructure\Translator;

use Demo\Domain\Model\User;
use Demo\Domain\Model\Name;
use Demo\Infrastructure\Eloquent\UserEloquent;

/**
 * Class UserTranslator
 * @package Demo\Infrastructure\Translator
 */
class UserTranslator
{
    public static function toModel(UserEloquent $eloquent): User
    {
        return new User(
            $eloquent->id,
            Name::from($eloquent->name),
            $eloquent->email,
            $eloquent->gender,
            $eloquent->date_of_birth,
        );
    }
}
