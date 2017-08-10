<?php

namespace RDSysCo\PHPSpec;

class RomanNumber
{
    protected  static $symbols =  [
        1000 => "M",
        900 => "CM",
        500 => "D",
        400 => "CD",
        100 => "C",
        90 => "XC",
        50 => "L",
        10 => "X",
        9 => "IX",
        5 => "V",
        4 => "IV",
        1 => "I",
    ];

    public function convert($number)
    {
        $output = "";
        $this->guardInvalidNumber($number);

        foreach (self::$symbols as $value => $symbol)
        {
            while ($number >= $value) {
                $output .= $symbol;
                $number -= $value;
            }
        }

        return $output;
    }

    /**
     *
     * @param $number
     */
    private function guardInvalidNumber($number)
    {
        if ($number < 1) {
            throw new \InvalidArgumentException();
        }
    }


}
