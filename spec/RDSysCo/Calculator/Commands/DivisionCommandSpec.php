<?php

namespace spec\RDSysCo\Calculator\Commands;

use RDSysCo\Calculator\Calculator;
use RDSysCo\Calculator\Commands\DivisionCommand;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DivisionCommandSpec extends ObjectBehavior
{
    public function let(Calculator $calculator)
    {
        $this->beConstructedWith($calculator, 10);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(DivisionCommand::class);
    }

    function it_executes(Calculator $calculator) {
        $this->beConstructedWith($calculator, 5);
        $calculator->div(5)->shouldBeCalled();
        $this->execute();
    }

    function it_reverts(Calculator $calculator) {
        $this->beConstructedWith($calculator, 5);
        $calculator->mul(5)->shouldBeCalled();
        $this->undo();
    }
}
