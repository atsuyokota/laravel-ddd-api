<?php

namespace Demo\Infrastructure\Translator;

use Demo\Domain\Model\User;
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
            $eloquent->name,
            $eloquent->email,
            $eloquent->gender,
            $eloquent->date_of_birth,
        );
    }
}
