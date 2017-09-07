<?php

namespace RDSysCo\PHPSpec;

class BowlingGame
{
    private $rolls = [];

    public function roll($pin) {
        $this->rolls[]  = $pin;

    }

    public function score() {
        $sum = 0;

        $roll = 0;

        for ($frameIndex = 0; $frameIndex < 10; $frameIndex++) {
            if($this->isStrike($roll)) {
                $sum += 10 + $this->rolls[$roll + 1] + $this->rolls[$roll + 2];
                $roll += 1;
            }
            elseif($this->isSpare($roll)) {
                $sum += 10 + $this->rolls[$roll + 2];
                $roll += 2;
            } else {
                $sum += $this->rolls[$roll] + $this->rolls[$roll + 1];
                $roll += 2;
            }
        }
        return $sum;
    }

    /**
     * @param $roll
     *
     * @return bool
     */
    private function isSpare($roll): bool
    {
        return $this->rolls[$roll] + $this->rolls[$roll + 1] == 10;
    }

    /**
     * @param $roll
     *
     * @return bool
     */
    private function isStrike($roll): bool
    {
        return $this->rolls[$roll] == 10;
    }
}
