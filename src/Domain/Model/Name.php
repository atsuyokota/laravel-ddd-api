<?php

namespace Demo\Domain\Model;

use Demo\Domain\Exception\InvalidDomainException;

class Name
{
    /** @var string */
    private $value;

    /**
     * UserName constructor.
     * @param string $value
     * @throws InvalidDomainException
     */
    private function __construct(string $value)
    {
        if (mb_strlen($value) > 100) {
            throw new InvalidDomainException('UserName less than 100 characters.');
        }
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function value(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return Name
     * @throws InvalidDomainException
     */
    public static function from(string $value): Name
    {
        return new static($value);
    }
}
