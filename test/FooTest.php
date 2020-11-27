<?php

use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    /**
     * @test
     * @dataProvider providesFoo
     */
    public function foo(array $data)
    {
        foreach ($data as $k => $v) {
            $this->assertTrue(true);
        }
    }

    public function providesFoo(): array
    {
        return [];
    }
}