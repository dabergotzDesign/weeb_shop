<?php

class Manga {
    public $title;
    public $author;
    public $volumes;
    public $price;

    public function __construct(string $title, string $author, int $volumes, string $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->volumes = $volumes;
        $this->price = $price;
    }

    public function getTitle(): string{
        return $this->title;
    }

    public function getAuthor(): string{
        return $this->author;
    }

    public function getVolumes(): int{
        return $this->volumes;
    }

    public function getPrice(): string{
        return $this->price;
    }
}