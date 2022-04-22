<?php
declare(strict_types=1);

namespace App\Service;


use App\Shop\ShopProduct;

class ShopProductWriter
{
    public function write(ShopProduct $product)
    {
        return "{$product->getTitle()}: "
            . $product->getFullName()
            . " ({$product->getPrice()})";
    }
}
