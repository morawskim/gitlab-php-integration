<?php

namespace Test;

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAddTwoFloatNumbers(): void
    {
        $calculator = new Calculator();
        $result = $calculator->add(2.5, 3.5);

        $this->assertSame(6.0, $result);
    }

    public function testAddTwoIntNumbers(): void
    {
        $calculator = new Calculator();
        $result = $calculator->add(2, 3);

        $this->assertSame(5.0, $result);
    }
}
