<?php
declare(strict_types=1);

namespace App\Shop;


class CDProduct extends ShopProduct
{
    private int $playLength;

    public function __construct(
        string $title,
        string $firstName,
        string $lastName,
        int $price,
        int $playLength
    ) {
        parent::__construct(
            $title,
            $firstName,
            $lastName,
            $price
        );
        $this->playLength = $playLength;
    }

    public function getPlayLength(): int
    {
        return $this->playLength;
    }
}
