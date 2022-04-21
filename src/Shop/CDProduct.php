<?php
declare(strict_types=1);

namespace App\Shop;


class CDProduct
{
    private int $id;
    private string $title;
    private string $firstName;
    private string $lastName;
    private int $price;
    private int $playLength;

    public function __construct(
        string $title,
        string $firstName,
        string $lastName,
        int $price,
        int $playLength
    ) {
        $this->title = $title;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->price = $price;
        $this->playLength = $playLength;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getPlayLength(): int
    {
        return $this->playLength;
    }
}
