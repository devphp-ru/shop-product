<?php
declare(strict_types=1);

namespace App\Shop;


use PHPUnit\Framework\TestCase;

class BookProductTest extends TestCase
{
    private BookProduct $book;
    private array $params = [
        'id' => 101,
        'title' => 'PHP book',
        'first_name' => 'Ivan',
        'last_name' => 'Nemov',
        'price' => 1500,
        'number_pages' => 100,
    ];

    public function setUp(): void
    {
        $this->book = new BookProduct(
            $this->params['title'],
            $this->params['first_name'],
            $this->params['last_name'],
            (int)$this->params['price'],
            (int)$this->params['number_pages']
        );
        $this->book->setId((int)$this->params['id']);
    }

    public function testCanCreateBookProduct()
    {
        $this->assertEquals($this->book->getTitle(), 'PHP book');
        $this->assertEquals($this->book->getFirstName(), 'Ivan');
        $this->assertEquals($this->book->getLastName(), 'Nemov');
        $this->assertEquals($this->book->getPrice(), 1500);
        $this->assertEquals($this->book->getNumberPages(), 100);
        $this->assertEquals($this->book->getId(), 101);
    }

    public function testInvalidParameters()
    {
        $this->assertNotEquals($this->book->getTitle(), [1]);
        $this->assertNotEquals($this->book->getFirstName(), 3);
        $this->assertNotEquals($this->book->getLastName(), 2);
        $this->assertNotEquals($this->book->getPrice(), 2.41);
        $this->assertNotEquals($this->book->getNumberPages(), 101.01);
        $this->assertNotEquals($this->book->getId(), 101.40);
    }

    public function testGetInfoBookProduct()
    {
        $this->assertEquals($this->book->getSummaryLine(), "PHP book: Ivan Nemov (100), price: 1500");
    }
}
