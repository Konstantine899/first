<?php

class Calculator
{
    private $a;
    private $b;

    public function __construct(float $a, float $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function sum(): float
    {
        return $this->a + $this->b;
    }

    public function mul(): float
    {
        return $this->a * $this->b;
    }

    public function dif(): float
    {
        return $this->a - $this->b;
    }

    public function div(): float
    {
        return $this->a / $this->b;
    }
}
