<?php

namespace RDSysCo\PHPSpec;

class PrimeFactor
{

    public function convert($number)
    {
        $output = [];
        $this->guardInvalidNumbers($number);
        if ($number > 1) {
            for ($counter = 2; $counter <= $number; $counter++) {
                while ($number % $counter == 0) {
                    $output[] = $counter;
                    $number /= $counter;
                }
            }
        }

        return $output;
    }

    /**
     * @param $number
     *
     * @throws \Exception
     */
    private function guardInvalidNumbers($number)
    {
        if ($number < 1) {
            throw new \Exception('Hi');
        }
    }
}
