<?php
declare(strict_types=1);

namespace App\Shop;


use PHPUnit\Framework\TestCase;

class ShopProductTest extends TestCase
{
    public function testCanCreateBookProduct()
    {
        $book = new BookProduct('title', 'name', 'last', 100, 100);
        $this->assertInstanceOf(ShopProduct::class, $book);
    }

    public function testCanCreateCDProduct()
    {
        $cd = new CDProduct('title', 'name', 'last', 100, 100);
        $this->assertInstanceOf(ShopProduct::class, $cd);
    }
}
