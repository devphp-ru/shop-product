<?php
declare(strict_types=1);

namespace App\Service;


use App\Shop\BookProduct;
use App\Shop\ShopProduct;
use PHPUnit\Framework\TestCase;

class ShopProductWriterTest extends TestCase
{
    public function testAddNewProduct()
    {
        $book = new BookProduct(
            'title 1',
            'name',
            'family',
            150,
            254
        );

        $writer = new ShopProductWriter();
        $writer->addProduct($book);
        $writer->addProduct($book);
        $writer->addProduct($book);

        $products = $writer->getProducts();
        $this->assertCount(3, $products);
        $this->assertIsObject($products[0]);
        $this->assertInstanceOf(ShopProduct::class, $products[0]);
    }

    public function testInformationAboutProductsInString()
    {
        $book = new BookProduct(
            'title 1',
            'name',
            'family',
            150,
            254
        );

        $writer = new ShopProductWriter();
        $writer->addProduct($book);
        $writer->addProduct($book);
        $writer->addProduct($book);

        $stringTest = "title 1: name family (150)\ntitle 1: name family (150)\ntitle 1: name family (150)\n";
        $stringProduct = $writer->write();
        $this->assertEquals($stringProduct, $stringTest);
    }
}
