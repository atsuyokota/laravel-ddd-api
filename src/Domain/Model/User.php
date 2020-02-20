<?php

namespace Demo\Domain\Model;

final class User {

    private $id;

    private $name;

    private $gender;

    private $dateOfBirth;

    public function __construct(
        $id,
        Name $name,
        Email $email,
        $gender,
        $dateOfBirth)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
        $this->dateOfBirth = $dateOfBirth;
    }

    public function id()
    {
        return $this->id;
    }

    public function name(): Name
    {
        return $this->name;
    }

    public function email(): Email
    {
        return $this->email;
    }

    public function gender()
    {
        return $this->gender;
    }

    public function dateOfBirth()
    {
        return $this->dateOfBirth;
    }
}
