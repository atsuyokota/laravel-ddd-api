<?php

namespace Demo\Domain\Model;

use Demo\Domain\Exception\InvalidDomainException;

class Gender
{
    const MALE = 'M';

    const FEMALE = 'F';

    private static $valueToName = [
        self::MALE => 'M',
        self::FEMALE => 'F',
    ];

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function from($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new InvalidDomainException(sprintf(
                'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return new static($value);
    }

    public function value(): string
    {
        return $this->value;
    }
}
