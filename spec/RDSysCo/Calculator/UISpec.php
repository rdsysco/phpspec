<?php

namespace spec\RDSysCo\Calculator;

use RDSysCo\Calculator\Calculator;
use RDSysCo\Calculator\Commands\AdditionCommand;
use RDSysCo\Calculator\Invoker;
use RDSysCo\Calculator\UI;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UISpec extends ObjectBehavior
{
    function let(Calculator $calculator, Invoker $invoker) {
        $this->beConstructedWith($calculator, $invoker);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(UI::class);
    }


    function it_returns_calculator_results(Calculator $calculator, Invoker $invoker) {
        $this->beConstructedWith($calculator, $invoker);
        $calculator->getResult()->willReturn(1);
        $this->getResult()->shouldReturn(1);
    }

    function it_add_addition_command (Calculator $calculator, Invoker $invoker) {
        $this->beConstructedWith($calculator, $invoker);
        $invoker->addCommand(Argument::type(AdditionCommand::class))->shouldBeCalled();
        $this->add(1);
    }
}
