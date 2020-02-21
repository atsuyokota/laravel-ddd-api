<?php

namespace Demo\Domain\Model;

use Demo\Domain\Exception\InvalidDomainException;

class Email
{
    /** @var string */
    private $value;

    /**
     * Email constructor.
     * @param string $value
     * @throws InvalidDomainException
     */
    private function __construct(string $value)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidDomainException('Email is invalid.');
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
     * @return Email
     * @throws InvalidDomainException
     */
    public static function from(string $value): Email
    {
        return new static($value);
    }
}
