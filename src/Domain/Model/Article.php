<?php

namespace Demo\Domain\Model;

final class Article {
    private $id;

    private $title;

    private $description;

    private $author;

    public function __construct($id, $title, $description, $author)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->author = $author;
    }

    public function id()
    {
        return $this->id;
    }

    public function title()
    {
        return $this->title;
    }

    public function description()
    {
        return $this->description;
    }
}
