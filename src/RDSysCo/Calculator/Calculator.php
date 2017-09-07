<?php

namespace RDSysCo\Calculator;

class Calculator
{

    private $result = 0;

    public function add($number)
    {
        $this->result += $number;
    }

    public function sub($number)
    {
        $this->result -= $number;
    }

    public function mul($number)
    {
        $this->result *= $number;
    }

    public function div($number)
    {
        $this->guardDivisionByZero($number);
        $this->result /= $number;
    }

    public function getResult()
    {
        return $this->result;
    }

    private function guardDivisionByZero($number)
    {
        if($number == 0) {
            throw new \InvalidArgumentException("Division by zero not allowed!");
        }
    }
}
