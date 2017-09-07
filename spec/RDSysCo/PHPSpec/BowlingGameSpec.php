<?php

namespace spec\RDSysCo\PHPSpec;

use RDSysCo\PHPSpec\BowlingGame;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BowlingGameSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(BowlingGame::class);
    }


    function it_should_return_0_for_all_zero()
    {
        $this->rollMany(20, 0);

        $this->score()->shouldReturn(0);
    }

    function it_should_return_20_for_all_roll()
    {
        $this->rollMany(20, 1);

        $this->score()->shouldReturn(20);
    }

    function it_should_work_for_spare() {
        $this->rollSpare();  // Spare
        $this->roll(6);
        $this->rollMany(17,0);
        $this->score()->shouldReturn(22);
    }

    function it_should_work_for_strike() {
        $this->rollStrike();
        $this->roll(2);
        $this->roll(3);
        $this->rollMany(17, 0);
        $this->score()->shouldReturn(20);
    }

    function it_asserts_perfect_game() {
        $this->rollMany(12, 10);

        $this->score()->shouldReturn(300);
    }

    /**
     * @param $count
     * @param $pings
     */
    private function rollMany($count, $pings)
    {
        for ($i = 0; $i < $count; $i++) {
            $this->roll($pings);
        }
    }

    private function rollSpare()
    {
        $this->roll(5);
        $this->roll(5);
    }

    private function rollStrike()
    {
        $this->roll(10);
    }


}
