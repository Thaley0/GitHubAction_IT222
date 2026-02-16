<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    private Calculator $calc;

    protected function setUp(): void
    {
        $this->calc = new Calculator();
    }

    public function testAdd(): void
    {
        $this->assertSame(5, $this->calc->add(2, 3));
        $this->assertSame(0, $this->calc->add(-1, 1));
    }

    public function testSubtract(): void
    {
        $this->assertSame(1, $this->calc->subtract(3, 2));
        $this->assertSame(-2, $this->calc->subtract(-1, 1));
    }
}
