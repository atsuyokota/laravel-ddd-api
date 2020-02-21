<?php

namespace Demo\Domain\Model;

use Demo\Domain\Exception\InvalidDomainException;

class Gender
{
    const MALE = 'M';

    const FEMALE = 'F';

    private static $consts = [
        self::MALE,
        self::FEMALE,
    ];

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @param $value
     * @return static
     * @throws InvalidDomainException
     */
    public static function from($value)
    {
        if (!in_array($value, self::$consts)) {
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
