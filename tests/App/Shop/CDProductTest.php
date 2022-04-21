<?php
declare(strict_types=1);

namespace App\Shop;


use PHPUnit\Framework\TestCase;

class CDProductTest extends TestCase
{
    private CDProduct $cd;
    private array $params = [
        'id' => 101,
        'title' => 'CD title',
        'first_name' => 'Ivan',
        'last_name' => 'Nemov',
        'price' => 1500,
        'play_length' => 180,
    ];

    public function setUp(): void
    {
        $this->cd = new CDProduct(
            $this->params['title'],
            $this->params['first_name'],
            $this->params['last_name'],
            (int)$this->params['price'],
            (int)$this->params['play_length']
        );
        $this->cd->setId((int)$this->params['id']);
    }

    public function testCanCreateCDProduct()
    {
        $this->assertEquals($this->cd->getTitle(), 'CD title');
        $this->assertEquals($this->cd->getFirstName(), 'Ivan');
        $this->assertEquals($this->cd->getLastName(), 'Nemov');
        $this->assertEquals($this->cd->getPrice(), 1500);
        $this->assertEquals($this->cd->getPlayLength(), 180);
        $this->assertEquals($this->cd->getId(), 101);
    }

    public function testInvalidParameters()
    {
        $this->assertNotEquals($this->cd->getTitle(), [1]);
        $this->assertNotEquals($this->cd->getFirstName(), 3);
        $this->assertNotEquals($this->cd->getLastName(), 2);
        $this->assertNotEquals($this->cd->getPrice(), 2.41);
        $this->assertNotEquals($this->cd->getPlayLength(), 101.01);
        $this->assertNotEquals($this->cd->getId(), 101.40);
    }
}
