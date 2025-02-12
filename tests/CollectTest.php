<?php

use PHPUnit\Framework\TestCase;
use Collect\Collect;

class CollectTest extends TestCase
{
    public function testOnly()
    {
        $collect = new Collect([
            'name' => 'Alice',
            'age' => 25,
            'email' => 'alice@example.com',
            'country' => 'USA'
        ]);

        $result = $collect->only(['name', 'email']);

        $this->assertSame(['name' => 'Alice', 'email' => 'alice@example.com'], $result);
    }


    public function testFirst()
    {
        $collect = new Collect([1, 2, 3, 4, 5]);

        $result = $collect->first();

        $this->assertSame(1, $result);
    }

    public function testCount()
    {
        $collect = new Collect([1, 2, 3, 4, 5]);

        $result = $collect->count();

        $this->assertSame(5, $result);
    }

    public function testToArray()
    {
        $collect = new Collect([1, 2, 3, 4, 5]);

        $result = $collect->toArray();

        $this->assertSame([1,2,3,4,5], $result);
    }

}