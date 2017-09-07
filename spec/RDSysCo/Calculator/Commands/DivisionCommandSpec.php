<?php

namespace spec\RDSysCo\Calculator\Commands;

use RDSysCo\Calculator\Commands\DivisionCommand;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DivisionCommandSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(DivisionCommand::class);
    }
}
