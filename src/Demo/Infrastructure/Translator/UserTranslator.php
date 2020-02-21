<?php

namespace Demo\Infrastructure\Translator;

use Demo\Domain\Exception\InvalidDomainException;
use Demo\Domain\Model\DateOfBirth;
use Demo\Domain\Model\Email;
use Demo\Domain\Model\Gender;
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
        try {
            return new User(
                $eloquent->id,
                Name::from($eloquent->name),
                Email::from($eloquent->email),
                Gender::from($eloquent->gender),
                DateOfBirth::from($eloquent->date_of_birth)
            );
        } catch (InvalidDomainException $e) {
            // Swallow the exception to continue
        }
    }
}
