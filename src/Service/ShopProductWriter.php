<?php
declare(strict_types=1);

namespace App\Service;


use App\Shop\ShopProduct;

class ShopProductWriter
{
    private array $products = [];

    public function getProducts(): array
    {
        return $this->products;
    }

    public function addProduct(ShopProduct $product): void
    {
        $this->products[] = $product;
    }

    public function write()
    {
        $string = '';
        foreach ($this->getProducts() as $product) {
            $string .= "{$product->getTitle()}: "
                . "{$product->getFullName()} "
                . "({$product->getPrice()})\n";
        }

        return $string;
    }
}
