<?php
declare(strict_types=1);

namespace App\Service;


use App\Shop\BookProduct;
use PHPUnit\Framework\TestCase;

class ShopProductWriterTest extends TestCase
{
    public function testProductWriter()
    {
        $book = new BookProduct(
            'title 1',
            'name',
            'family',
            150,
            254
        );

        $writer = new ShopProductWriter();
        $infoProduct = $writer->write($book);
        $bookInfo = "{$book->getTitle()}: {$book->getFullName()} ({$book->getPrice()})";
        $this->assertEquals($infoProduct, $bookInfo);
    }
}
