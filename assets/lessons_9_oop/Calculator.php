<?php
class Calculator
{

    private $a;
    private $b;

    //constructor

    function __construct(float $a, float $b)
    {
        $this->setA($a);
        $this->setB($b);
    }

    //math

    function sum(): float
    {
        return $this->a + $this->b;
    }

    function mul(): float
    {
        return $this->a * $this->b;
    }

    function dif(): float
    {
        return $this->a - $this->b;
    }

    function div(): float
    {
        return $this->a / $this->b;
    }

    //setters

    function setA(float $a)
    {
        $this->a = $a;
    }
    function setB(float $b)
    {
        $this->b = $b;
    }
}
