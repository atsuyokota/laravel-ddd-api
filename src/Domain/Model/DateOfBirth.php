<?php

namespace Demo\Domain\Model;

use Demo\Domain\Exception\InvalidDomainException;

class DateOfBirth
{
    const DATE_FORMAT = 'Y-m-d';

    const SENIOR_AGE = 65;

    /** @var string */
    private $value;

    /**
     * DateOfBirth constructor.
     * @param string $value
     * @throws InvalidDomainException
     */
    private function __construct(string $value)
    {
        if (!$this->validateDate($value)) {
            throw new InvalidDomainException('DateOfBirth is not valid.');
        }
        $this->value = $value;
    }

    private function validateDate($date)
    {
        $d = \DateTime::createFromFormat(self::DATE_FORMAT, $date);
        return $d && $d->format(self::DATE_FORMAT) == $date;
    }

    /**
     * @return string
     */
    public function value(): string
    {
        return $this->value;
    }

    /**
     * Is Senior or not
     * @return bool
     */
    public function isSenior(): bool
    {
        if ($this->age() >= self::SENIOR_AGE) {
            return true;
        }
        return false;
    }

    /**
     * Get age from date of birth
     * @return int
     */
    public function age(): int
    {
        $currentNum = (int)date('Ymd');
        $dateOfBirthNum = (int)date('Ymd', strtotime($this->value()));
        return (int)(($currentNum - $dateOfBirthNum) / 10000);
    }

    /**
     * @param string $value
     * @return DateOfBirth
     * @throws InvalidDomainException
     */
    public static function from(string $value): DateOfBirth
    {
        return new static($value);
    }
}
