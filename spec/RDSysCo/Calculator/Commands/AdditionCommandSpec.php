<?php

namespace spec\RDSysCo\Calculator\Commands;

use RDSysCo\Calculator\Calculator;
use RDSysCo\Calculator\Commands\AdditionCommand;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AdditionCommandSpec extends ObjectBehavior
{

    function let(Calculator $calculator) {
        $this->beConstructedWith($calculator, 0);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(AdditionCommand::class);
    }

    function it_executes(Calculator $calculator) {
        $this->beConstructedWith($calculator, 10);
        $calculator->add(10)->shouldBeCalled();
        $this->execute();
    }

    function it_reverts(Calculator $calculator) {
        $this->beConstructedWith($calculator, 10);
        $calculator->sub(10)->shouldBeCalled();
        $this->undo();
    }

}
