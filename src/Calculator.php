<?php

declare(strict_types=1);

namespace App;

class Calculator
{
    public function add(float $a, float $b): float
    {
        return $a + $b;
    }

    public function subtraction(float $a, float $b): float {
        return $a - $b;
    }
}
