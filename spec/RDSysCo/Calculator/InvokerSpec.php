<?php

namespace spec\RDSysCo\Calculator;

use RDSysCo\Calculator\Commands\AdditionCommand;
use RDSysCo\Calculator\Invoker;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class InvokerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Invoker::class);
    }

    function it_adds_addition_command(AdditionCommand $command) {
        $command->execute()->shouldBeCalled();
        $this->addCommand($command);
    }

    function it_doesnt_fail_on_no_command_removal() {
        $this->removeCommand();
    }
}
