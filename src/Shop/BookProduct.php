<?php
declare(strict_types=1);

namespace App\Shop;


class BookProduct extends ShopProduct
{
    private int $numberPages;

    public function __construct(
        string $title,
        string $firstName,
        string $lastName,
        int $price,
        int $numberPages
    ) {
        parent::__construct(
            $title,
            $firstName,
            $lastName,
            $price
        );
        $this->numberPages = $numberPages;
    }

    public function getNumberPages(): int
    {
        return $this->numberPages;
    }
}
