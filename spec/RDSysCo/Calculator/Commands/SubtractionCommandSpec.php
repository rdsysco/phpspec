<?php

namespace spec\RDSysCo\Calculator\Commands;

use RDSysCo\Calculator\Calculator;
use RDSysCo\Calculator\Commands\SubtractionCommand;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SubtractionCommandSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SubtractionCommand::class);
    }

    public function let(Calculator $calculator)
    {
        $this->beConstructedWith($calculator, 0);
    }

    public function it_executes(Calculator $calculator)
    {
        $this->beConstructedWith($calculator, 10);
        $calculator->sub(10)->shouldBeCalled();
        $this->execute();
    }

    public function it_reverts(Calculator $calculator)
    {
        $this->beConstructedWith($calculator, 10);
        $calculator->add(10)->shouldBeCalled();
        $this->undo();
    }
}
