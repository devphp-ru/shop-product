<?php
declare(strict_types=1);

namespace App\Shop;


class BookProduct
{
    private int $id;
    private string $title;
    private string $firstName;
    private string $lastName;
    private int $price;
    private int $numberPages;

    public function __construct(
        string $title,
        string $firstName,
        string $lastName,
        int $price,
        int $numberPages
    ) {
        $this->title = $title;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->price = $price;
        $this->numberPages = $numberPages;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
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

    public function getNumberPages(): int
    {
        return $this->numberPages;
    }
}
